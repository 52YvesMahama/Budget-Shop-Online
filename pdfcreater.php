 <?php
    require('phpToPDF/phpToPDF.php');

    /*/Set Your Options -- see documentation for all options
    $pdf_options = array(
          "source_type" => 'url',
          "source" => '../results.php',
          "action" => 'save');

    //Code to generate PDF file from options above
    phptopdf($pdf_options);*/
	   ob_start();
    include('./results.php');
    $my_html = ob_get_clean();

    //Set Your Options -- we are saving the PDF as 'my_filename.pdf' to a 'my_pdfs' folder
    $pdf_options = array(
      "source_type" => 'php',
      "source" => $my_html,
      "action" => 'save',
      "save_directory" => 'my_pdfs',
      "file_name" => 'my_filename.pdf');

    //Code to generate PDF file from options above
    phptopdf($pdf_options);
	
	
	
	
	
	
	
				header("Location:index1.php"); // Redirecting to other page
?> 