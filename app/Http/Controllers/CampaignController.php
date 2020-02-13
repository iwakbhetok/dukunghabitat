<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Storage;
use App\Campaign;
use Pomirleanu\GifCreate;

class CampaignController extends Controller
{

    public function process(Request $request)
    {
        $template = $request->input('slider_id');

        $totalFrames = [
            1 => 100,
            2 => 57,
            3 => 57,
        ];
        $dir = Str::random();
        Storage::makeDirectory($dir);

        $pengirim = [
            'text'  => $request->input('sender'),
            'x'     => 235,
            'y'     => 415,
            'size'  => 14,
            'align' => 'center',
            'color' => '#ca4d4e',
        ];
        $penerima = [
            'text'  => $request->input('receiver'),
            'x'     => 86,
            'y'     => 62,
            'size'  => 14,
            'align' => 'left',
            'color' => '#ca4d4e',
        ];
        $pesan = [
            'text'  => $request->input('message'),
            'x'     => 48,
            'y'     => 100,
            'size'  => 13.5,
            'align' => 'left',
            'color' => '#2e2d2d',
        ];

        for ($i = 1; $i <= $totalFrames[$template]; $i++) {
            $filename = 'frame-' . $i . '.png';
            $this->makeTexts([
                $pengirim,
                $penerima,
                $pesan,
            ], $template, $i, $dir);
        }

        $this->makeGif($dir, $totalFrames[$template]);
        $this->cleanupFiles($dir, $totalFrames[$template]);

        $pengirim = $pengirim['text'];
        $penerima = $penerima['text'];
        $pesan = $pesan['text'];
        $gifUrl = asset('storage/' . $dir . '/card.gif');

        // save data gif campaign
        Campaign::create([
            'donation_id'=> $request->input('donation_id'),
            'sender'    => $request->input('sender'),
            'receiver'  => $request->input('receiver'),
            'message'   => $pesan,
            'uuid'      => $dir,
        ]);

        $this->response['url'] = $gifUrl;
        $this->response['uuid'] = $dir;
        return response()->json($this->response);
        // return view('welcome', compact('pengirim', 'penerima', 'pesan', 'template', 'gifUrl'));
    }

    private function makeGif($dir, $totalFrames)
    {
        $durations = [];
        $frames = [];
        for ($i = 1; $i <= $totalFrames; $i++) { 
            $durations[] = $i == $totalFrames ? 30 : 7;
            //$frames[] = imagecreatefromjpeg(storage_path('app/public/' . $dir . '/frame-' . $i . '.jpg'));
            $frames[] = imagecreatefrompng(storage_path('app/public/' . $dir . '/frame-' . $i . '.png'));
        }

        $gif = new GifCreate\GifCreate();
        $gif->create($frames, $durations);
        $gif->save('storage/' . $dir . '/card.gif');
    }

    private function cleanupFiles($dir, $totalFrames)
    {
        $paths = [];
        for ($i = 1; $i <= $totalFrames; $i++) { 
            $paths[] = $dir . '/frame-' . $i . '.png'; 
        }
        \Storage::delete($paths);
    }

    private function makeTexts(array $textData, $template, $frame, $dir)
    {
        
        $img = Image::make(public_path('img/master-gif-' . $template . '/frame-' . $frame . '.png'));
        
        foreach ($textData as $entry) {

            $fontHeight = 20;
            $lines = explode("\n", wordwrap($entry['text'], 50));
            $y = $entry['y'];

            foreach ($lines as $line) {
                $img->text($line, $entry['x'], $y, function($font) use($entry) {
                    $font->file(public_path('fonts/AvenirNextLTPro-Regular.otf'));
                    $font->size($entry['size']);
                    $font->color($entry['color']);
                    $font->align($entry['align']);
                    $font->valign('center');
                });
                $y += $entry['size'] * 2;
            }
    
        }

        //$img->save('storage/'. $dir . '/frame-'. $frame. '.jpg', 60, 'jpg');
        $img->save('storage/'. $dir . '/frame-'. $frame. '.png', 100, 'png');
    }


}
