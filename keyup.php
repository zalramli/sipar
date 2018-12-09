<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="" method="post" id="myform">
<select name="akomodasi" id="xx">
	<option value="stasiun">Stasiun</option>
	<option value="TAEK">TAEK</option>
</select>
</form>	

<script src="backend/template/js/ajax.js"></script>
<script type="text/javascript">
    $(document).on('change', '#xx', function(event){
            event.preventDefault();
            var form_data = $("#myform").serialize();
            $.ajax({
            url: "frontend/wisata/ambil_akomodasi.php",

                method:"POST",
                data:form_data,
                success:function(data){
                    alert(data);
                }
            });
        });
        // mengambil total harga
</script>	
</body>
</html>