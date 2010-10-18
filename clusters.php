<?
	#
	# $Id$
	#

	include('include/init.php');

	#
	# get the clusters
	#

	loadlib("ganglia");

	$output = ganglia_clusters();


	#
	# output
	#

	switch($_GET["format"]) {
		case "json":
			echo json_encode($output);
			break;

		default:
			$smarty->display('page_error_404.txt');
	}

?>
