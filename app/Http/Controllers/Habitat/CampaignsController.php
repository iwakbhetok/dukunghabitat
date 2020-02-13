<?php

namespace App\Http\Controllers\Habitat;

use Exception;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Events\BreadDataRestored;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Events\BreadImagesDeleted;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CampaignExport;
use App\Campaign;

class CampaignsController extends VoyagerBaseController
{

    public function exportAll(){
        $month = 0;
        $year = 0;
        return (new CampaignExport)->forPeriod($month, $year)->download('campaigns-'. time() . '.xlsx');
    }

}
