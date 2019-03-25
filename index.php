<?php
	var_dump($_POST);
	//$_POST['texto'] 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teste CK Editor 4</title>
	
</head>
<body>
	<form action="" method="POST" id="form-editor">
		<textarea name="texto" id="texto">
			<a href="https://ckeditor.com/docs/ckeditor4/latest/guide/dev_sourcearea.html">Editor HTML</a>
			<a href="https://ckeditor.com/cke4/builder">Builder</a>
			<a href="https://ckeditor.com/ckeditor-4/download">Download</a>

			<h2>The three greatest things you learn from traveling</h2><p>Like all the great things on earth traveling teaches us by example. Here are some of the most precious lessons I’ve learned over the years of traveling.</p><p>&nbsp;</p><p>&nbsp;</p><figure class="table"><table><tbody><tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr><tr><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td></tr><tr><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td></tr><tr><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td></tr><tr><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td></tr><tr><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td></tr></tbody></table></figure>			
		</textarea>
		<button type="submit" name="enviar" id="enviar">Submit</button>
	</form>
</body>
</html>
<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="js/ckeditor/ckeditor.js"></script>
<script>


 CKEDITOR.replace( 'texto', {
    extraPlugins: 'easyimage',
    cloudServices_tokenUrl: 'https://localhost/projetos/teste_ckeditor4/',
    cloudServices_uploadUrl: 'https://localhost/projetos/teste_ckeditor4/arquivos'
});


$('#form-editor').on('submit',function (e) {
	//e.preventDefault();
	//editor.setData('');

});
</script>
