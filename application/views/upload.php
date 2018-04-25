	<?= validation_errors('<p style="color:#c0392b">','</p>');?>
        <?php
            if($this->session->flashdata('alert'))
                {
                echo '<div class="alert alert-danger alert-message">';
                echo $this->session->flashdata('alert');
                echo '</div>';
                }
        ?>
<div class="dropzone">
	<div class="dz-message">
		<h3>Klik atau Drop gambar disini</h3>
	</div>
</div>