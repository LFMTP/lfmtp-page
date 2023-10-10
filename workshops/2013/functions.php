<?php

	function echoFile($file) {
		$fh = fopen($file, 'r');
		$txt = fread($fh, filesize($file));
		fclose($fh);
		echo $txt;
	}

	function startpublist() {
		echo "\n<!-- publication list -->\n";
                //echo "<ul>\n";
	}

	function endpublist() {
		//echo "</ul>";
		echo "<!-- publication list end -->\n\n";
	}

	function startpub($id) {
		echo "<p>";
		echo "<a name=\"" . $id . "\"></a>";
	}

	function endpub($id) {
		echo "</p>\n";
	}

	function links($id) {
		$basename = "papers/" . $id;
                $divfile = $basename . ".div";
                $psfile = $basename . ".ps";
                $pdffile = $basename . ".pdf";
                $bibfile = $basename . ".bib";
		if (file_exists($divfile) && is_readable($divfile)) {
			echo "[<a href=\"" . $divfile ."\">div</a>] ";
		}
		if (file_exists($psfile) && is_readable($psfile)) {
			echo "[<a href=\"" . $psfile ."\">ps</a>] ";
		}
		if (file_exists($pdffile) && is_readable($pdffile)) {
			echo "[<a href=\"" . $pdffile ."\">pdf</a>] ";
		}
		if (file_exists($bibfile) && is_readable($bibfile)) {
			echo "[<a href=\"" . $bibfile ."\">bib</a>] ";
		}
	}

	function phdthesis($id, $author, $title, $school, $year) {
		startpub($id);
		echo $author . ". " . $title . ". ";
		echo "PhD thesis, " . $school . ", " . $year . ". ";
		links($id);
		endpub($id);
	}

	function mastersthesis($id, $author, $title, $school, $year) {
		startpub($id);
		echo $author . ". " . $title . ". ";
		echo "Masters thesis, " . $school . ", " . $year . ". ";
		links($id);
		endpub($id);
	}

	function article($id, $author, $title, $journal, $volume, $number, $pages, $year) {
		startpub($id);
		echo $author . ". " . $title . ". ";
		echo "<i>" . $journal . "</i>, " . $volume . "(" . $number . "):" . $pages . ", " . $year . ". ";
		links($id);
		endpub($id);
	}

	function inproceedings($id, $author, $title, $editor, $booktitle, $month, $year, $address, $pages, $publisher, $pubyear) {
		startpub($id);
		echo $author . ". " . $title . ". ";
		echo "In " . $editor . " (editor";
		if (strstr($editor, " and ") || strstr($editor, ", ")) {
			echo "s";
		}
		echo ") <i>" . $booktitle . "</i>, " . $month . " " . $year . ", " . $address . ", " . $pages . ". " . $publisher . ", " . $pubyear . ". ";
		links($id);
		endpub($id);
	}

	function submitted($id, $author, $title) {
		startpub($id);
		echo $author . ". " . $title . ". ";
		echo "Submitted. ";
		links($id);
		endpub($id);
	}

?>
