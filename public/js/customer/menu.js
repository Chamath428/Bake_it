function buttonControl(addButtonId,cloeButtonId)
{

		if (document.getElementById(addButtonId).style.display != 'none') {
			document.getElementById(addButtonId).style.display = 'none';
			document.getElementById(cloeButtonId).style.display = 'inline-block';
		}else if (document.getElementById(addButtonId).style.display == 'none') {
			document.getElementById(addButtonId).style.display = 'inline-block';
			document.getElementById(cloeButtonId).style.display = 'none';
		}
}
