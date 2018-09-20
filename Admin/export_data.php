<?php
include("ses.php");
?>
<title>BDV Admin Dashboard</title>
<link rel="shortcut icon" type="image/x-icon" href="../themes/images/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<script type="text/javascript" src="tableExport-jquery-plugin-code/tableExport.js"></script>
<script type="text/javascript" src="tableExport-jquery-plugin-code/jquery.base64.js"></script>
<script type="text/javascript" src="tableExport-jquery-plugin-code/html2canvas.js"></script>
<script type="text/javascript" src="tableExport-jquery-plugin-code/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="tableExport-jquery-plugin-code/jspdf/jspdf.js"></script>
<script type="text/javascript" src="tableExport-jquery-plugin-code/jspdf/libs/base64.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php
include("koneksi.php");
if(isset($_GET['absensi'])){
	$qry = "SELECT a.nama, a.email, a.profesi, a.bagian, b.tgl, b.jam_masuk, b.jam_keluar FROM tb_user a, tb_absensi b WHERE a.id_user = b.id ";	
}elseif (isset($_GET['member'])) {
	$qry = "SELECT * FROM tb_user";	
}

$result = mysql_query($qry);

$records = array();
 
 while($row = mysql_fetch_assoc($result)){ 
    $records[] = $row;
  }
?>
<div class="container">
	<div class="row">
		<div class="btn-group pull-right" style=" padding: 10px;">
			<div class="dropdown">
			  <?php
				if(isset($_GET['absensi'])){
			  ?> 
			     <a href="data-absensi.php">
			     	<button class="btn btn-default" type="button">Back</button>
			     </a>
			  <?php
				}
				elseif (isset($_GET['member']))
				{
		      ?>
		      	 <a href="data-member.php">
		      	 	<button class="btn btn-default" type="button">Back</button>
		      	 </a>
		      <?php 
	            }
	          ?>
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			     <span class="glyphicon glyphicon-th-list"></span> Format Export
			   
			  </button>
			  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			    
				<li class="divider"></li>
				<li><a href="#" id="excel" onclick="$('#data').tableExport({type:'excel',escape:'false'});"> <img src="tableExport-jquery-plugin-code/images/xls.png" width="24px"> XLS</a></li>
				<li class="divider"></li>
                <!--
				<li><a href="#" onclick="$('#data').tableExport({type:'png',escape:'false'});"> <img src="tableExport-jquery-plugin-code/images/png.png" width="24px"> PNG</a></li>
                -->
				<li><a href="#" id="pdf" onclick="$('#data').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> <img src="tableExport-jquery-plugin-code/images/pdf.png" width="24px"> PDF</a></li>
											
			  </ul>
			</div>
		</div>
	</div>	
	<div class="row" style="height:300px;overflow:scroll;">
	    <table id="data" class="table table-striped">
	        <thead>
		        <?php
				if(isset($_GET['absensi'])){
				?>
	            <tr class="warning">
	            	<th colspan="4"> Data Absensi </th>
            	</tr>
			    <tr class="warning">
	                <th>Nama</th>
	                <th>Email</th>
	                <th>Profesi</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Jam Kunjungan</th>
                    <th>Jam Keluar</th>
	            </tr>
		        <?php
				}
				elseif (isset($_GET['member']))
				{
		        ?>
		        <tr class="warning">
			        <th colspan="4"> Data Member </th>
			    </tr>
			    <tr class="warning">
                    <th>Nama</th>
                        <th>Profesi</th>
	                <th>Bagian</th>
                    	<th>Keahlian</th>
						<th>Perusahaan</th>
						<th>Email</th>
                    	<th>Tanggal Lahir</th>
						<th>Gender</th>
						<th>Kota</th>
						<th>No Handphone</th>
						<th>Instagram</th>
                    	<th>LinkedIn</th>
                    	<th>Facebook</th>
                    	</tr>
	            <?php 
	            }
	            ?>
	        </thead>
	        <tbody>
	        <?php foreach($records as $rec):?>
		        <?php
				if(isset($_GET['absensi'])){
				?>
	            <tr>
	                <td><?php echo $rec['nama']?></td>
	                <td><?php echo $rec['email']?></td>
	                <td><?php echo $rec['profesi']?></td>
                    <td><?php echo $rec['tgl']?></td>
                    <td><?php echo $rec['jam_masuk']?></td>
                    <td><?php echo $rec['jam_keluar']?></td>
	            </tr>
	            <?php
				}
				elseif (isset($_GET['member']))
				{
		        ?>
		        <tr>
	                <td><?php echo $rec['nama']?></td>
                    <td><?php echo ucwords($rec['profesi'])?></td>
	                <td><?php echo ucwords($rec['bagian'])?></td>
                	<td><?php echo ucwords($rec['keahlian'])?></td>
	                <td><?php echo ucwords($rec['perusahaan'])?></td>
	                <td><?php echo $rec['email']?></td>
	                <td><?php echo $rec['tgl_lahir']?></td>
	                <td><?php echo ucwords($rec['gender'])?></td>
	                <td><?php echo ucwords($rec['kota'])?></td>
	                <td><?php echo $rec['no_hp']?></td>
	                <td><?php echo $rec['instagram']?></td>
	                <td><?php echo $rec['linkedIn']?></td>
	                <td><?php echo $rec['facebook']?></td>
	            </tr>
	            <?php 
	            }
	            ?>
	            <?php endforeach; ?>
	        </tbody>
	    </table>
	</div>
</div>
<script>
//$('#employees').tableExport();
//table2excel.js
;(function ( $, window, document, undefined ) {
var pluginName = "table2excel",

defaults = {
    exclude: ".noExl",
            name: "Table2Excel"
};

// The actual plugin constructor
function Plugin ( element, options ) {
        this.element = element;
        this.settings = $.extend( {}, defaults, options );
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
}

Plugin.prototype = {
    init: function () {
        var e = this;

        e.template = {
            head: "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets>",
            sheet: {
                head: "<x:ExcelWorksheet><x:Name>",
                tail: "</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet>"
            },
            mid: "</x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body>",
            table: {
                head: "<table>",
                tail: "</table>"
            },
            foot: "</body></html>"
        };

        e.tableRows = [];

        // get contents of table except for exclude
        $(e.element).each( function(i,o) {
            var tempRows = "";
            $(o).find("tr").not(e.settings.exclude).each(function (i,o) {
                tempRows += "<tr>" + $(o).html() + "</tr>";
            });
            e.tableRows.push(tempRows);
        });

        e.tableToExcel(e.tableRows, e.settings.name);
    },

    tableToExcel: function (table, name) {
        var e = this, fullTemplate="", i, link, a;

        e.uri = "data:application/vnd.ms-excel;base64,";
        e.base64 = function (s) {
            return window.btoa(unescape(encodeURIComponent(s)));
        };
        e.format = function (s, c) {
            return s.replace(/{(\w+)}/g, function (m, p) {
                return c[p];
            });
        };
        e.ctx = {
            worksheet: name || "Worksheet",
            table: table
        };

        fullTemplate= e.template.head;

        if ( $.isArray(table) ) {
            for (i in table) {
                //fullTemplate += e.template.sheet.head + "{worksheet" + i + "}" + e.template.sheet.tail;
                fullTemplate += e.template.sheet.head + "Table" + i + "" + e.template.sheet.tail;
            }
        }

        fullTemplate += e.template.mid;

        if ( $.isArray(table) ) {
            for (i in table) {
                fullTemplate += e.template.table.head + "{table" + i + "}" + e.template.table.tail;
            }
        }

        fullTemplate += e.template.foot;

        for (i in table) {
            e.ctx["table" + i] = table[i];
        }
        delete e.ctx.table;

        if (typeof msie !== "undefined" && msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
        {
            if (typeof Blob !== "undefined") {
                //use blobs if we can
                fullTemplate = [fullTemplate];
                //convert to array
                var blob1 = new Blob(fullTemplate, { type: "text/html" });
                window.navigator.msSaveBlob(blob1, getFileName(e.settings) );
            } else {
                //otherwise use the iframe and save
                //requires a blank iframe on page called txtArea1
                txtArea1.document.open("text/html", "replace");
                txtArea1.document.write(e.format(fullTemplate, e.ctx));
                txtArea1.document.close();
                txtArea1.focus();
                sa = txtArea1.document.execCommand("SaveAs", true, getFileName(e.settings) );
            }

        } else {
            link = e.uri + e.base64(e.format(fullTemplate, e.ctx));
            a = document.createElement("a");
            a.download = getFileName(e.settings);
            a.href = link;

            document.body.appendChild(a);

            a.click();

            document.body.removeChild(a);
        }

        return true;
    }
};

function getFileName(settings) {
    return ( settings.filename ? settings.filename : "datamember") + ".xls";
}

$.fn[ pluginName ] = function ( options ) {
    var e = this;
        e.each(function() {
            if ( !$.data( e, "plugin_" + pluginName ) ) {
                $.data( e, "plugin_" + pluginName, new Plugin( this, options ) );
            }
        });

    // chain jQuery functions
    return e;
};

})( jQuery, window, document );


$("#excel").click(function(){

                    $("#data").table2excel({
                          exclude: ".noExl",
                    name: "Excel Document customers"
                    }); 

                     });
</script>