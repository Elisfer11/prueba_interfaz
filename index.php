<?php
/*   Pi-hole: A black hole for Internet advertisements
*    (c) 2017 Pi-hole, LLC (https://pi-hole.net)
*    Network-wide ad blocking via your own hardware.
*
*    This file is copyright under the latest version of the EUPL.
*    Please see LICENSE file for your rights under this license.
*/

$indexpage = true;
require 'scripts/pi-hole/php/header_authenticated.php';
require_once 'scripts/pi-hole/php/gravity.php';
?>
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-sm-6">
        <!-- small box -->
        <div class="small-box bg-aqua no-user-select" id="total_queries" title="only A + AAAA queries">
            <div class="inner">
                <p>Total queries</p>
                <h3 class="statistic"><span id="dns_queries_today">---</span></h3>
            </div>
            <div class="icon">
                <i class="fas fa-globe-americas"></i>
            </div>
            <a href="network.php" class="small-box-footer" title="">
                <span id="unique_clients">-</span> active clients <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
   
