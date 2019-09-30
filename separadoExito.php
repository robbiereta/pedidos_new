<!-- guarda el separado e imprime un recibo de este. -->
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once "config.php";
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST["codigo"])){
    $codigo=$_POST["codigo"];
    echo  "<h3>Código del producto :".$codigo. "</h3>";
}
// Attempt select query execution
$sql = "SELECT * FROM mytable WHERE Codigo='$codigo'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<hr>";
        $row = mysqli_fetch_array($result);
            echo "<tr>";
                     
                echo "<td> Descripción: " . $row['Descripcion'] . "</td>";
                echo "<hr>";
                echo "<td> <h2>Precio del producto: $ " . $row['Precio_BiciVic'] . "</h2></td>";
               $descripcion=$row['Descripcion'];
               $precio=$row['Precio_BiciVic'];
            echo "</tr>";
        
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No se hallo el producto o no lo tiene la fabrica.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
//Close connection
mysqli_close($link);
?>
<?php
/* [STEP 1 - CREATE NEW INVOICR OBJECT] */
require "scripts/invoicr/invoicr.php";
$invoice = new Invoicr();

/* [STEP 2 - FEED ALL THE INFORMATION] */
// 2A - COMPANY INFORMATION
// OR YOU CAN PERMANENTLY CODE THIS INTO THE LIBRARY ITSELF
$invoice->set("company", [
    // (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) . 
    "scripts/invoicr/Logo.jpg",
	"scripts/invoicr/Logo.jpg", 
	// "Code Boxx",    
	// "Street Address, City, State, Zip",
	// "Phone: xxx-xxx-xxx | Fax: xxx-xxx-xxx",
	// "https://code-boxx.com",
	// "doge@code-boxx.com"
]);

// 2B - INVOICE INFO
$invoice->set("invoice", [
	["Separado #", "001"],
	["Fecha", "2011-12-12"]
]);

// 2C - BILL TO
// $invoice->set("billto", [
// 	"Customer Name",
// 	"Street Address", 
// 	"City, State, Zip"
// ]);

// // 2D - SHIP TO
// $invoice->set("shipto", [
// 	"Customer Name",
// 	"Street Address", 
// 	"City, State, Zip"
// ]);

// 2E - ITEMS
// YOU CAN JUST DUMP THE ENTIRE ARRAY IN USING SET, BUT HERE IS HOW TO ADD ONE AT A TIME... 
$items = [
	["Rubber Hose", "5m long rubber hose", 3, "$5.50", "$16.50"],
	["Rubber Duck", "Good bathtub companion", 8, "$4.20", "$33.60"],
	["Rubber Band", "", 10, "$0.10", "$1.00"],
	["Rubber Stamp", "", 3, "$12.30", "$36.90"],
	["Rubber Shoe", "For slipping, not for running", 1, "$20.00", "$20.00"]
];
foreach ($items as $i) { $invoice->add("items", $i); }

// 2F - TOTALS
$invoice->set("totals", [
	["SUB-TOTAL", "$108.00"],
	["DISCOUNT 10%", "-$10.80"],
	["GRAND TOTAL", "$97.20"]
]);

// 2G - NOTES, IF ANY
$invoice->set("notes", [
	"Cheques should be made payable to Code Boxx",
	"Get a 10% off with the next purchase with discount code DOGE1234!"
]);

/* [STEP 3 - OUTPUT] */
// 3A - CHOOSE TEMPLATE, DEFAULTS TO SIMPLE IF NOT SPECIFIED
$invoice->template("blueberry");

/*****************************************************************************/
// 3B - OUTPUT IN HTML
// DEFAULT DISPLAY IN BROWSER | 1 DISPLAY IN BROWSER | 2 FORCE DOWNLOAD | 3 SAVE ON SERVER
 //$invoice->outputHTML();
 $invoice->outputHTML(1);
 //$invoice->outputHTML(2, "invoice.html");
// $invoice->outputHTML(3, __DIR__ . DIRECTORY_SEPARATOR . "invoice.html");
/*****************************************************************************/
// 3C - PDF OUTPUT
// DEFAULT DISPLAY IN BROWSER | 1 DISPLAY IN BROWSER | 2 FORCE DOWNLOAD | 3 SAVE ON SERVER
// $invoice->outputPDF();
// $invoice->outputPDF(1);
 //$invoice->outputPDF(2, "invoice.pdf");
// $invoice->outputPDF(3, __DIR__ . DIRECTORY_SEPARATOR . "invoice.pdf");
/*****************************************************************************/
// 3D - DOCX OUTPUT
// DEFAULT FORCE DOWNLOAD| 1 FORCE DOWNLOAD | 2 SAVE ON SERVER
// $invoice->outputDOCX();
// $invoice->outputDOCX(1, "invoice.docx");
// $invoice->outputDOCX(2, __DIR__ . DIRECTORY_SEPARATOR . "invoice.docx");
/*****************************************************************************/

?>