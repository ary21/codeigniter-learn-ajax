<div class="">
	<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
	<button class="btn btn-primary" id="formAjax">Tambah Data</button>
</div>
<script>
	$(document).ready(function() {
		$('#formAjax').click(function(){
			// refer : https://api.jquery.com/jquery.get/
			$.get("<?= base_url() ?>welcome/form", function(result, err) {
				if (err) console.log(err);
				$('#body').html(result)
			});
		});
	});
</script>