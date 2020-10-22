.....
<?
global $USER;
if ($USER->IsAuthorized()) {
	if (Volunteer::IsCurrentRole()) {
		// include 'footer_modal.php';
	}
}
?>
.....
