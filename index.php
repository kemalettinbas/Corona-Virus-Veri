<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Türkiye'de COVID-19 - Sayacı</title>
    </head>
    <body>
    <div class="card text-white bg-dark mb-3">
   <div class="card-header">Türkiye’de COVID-19</div>
  <div class="card-body">
 <p class="card-text">COVID-19 vakalarının Türkiye’deki seyrine ilişkin en güncel ve güvenilir bilgilere buradan erişebilirsiniz. Aşağıdaki sayılar sadece T.C. Sağlık Bakanlığı yetkili personeli tarafından verilen bilgiye göre belirli periyotlarla güncellenmektedir.</p><center>
 
                <?php 
                $corona = file_get_contents('https://covid19.tubitak.gov.tr/anasayfa'); 
                preg_match_all('@<div class="views-row"><div class="number-wrapper"><div><span>(.*?)</span><p class="text-red">Vaka Sayısı</p></div><div><span>(.*?)</span><p class="text-red">Ölüm Sayısı</p></div><div><span>(.*?)</span><p class="text-red">İyileşme Sayısı</p></div></div>@si',$corona,$veri);
                print_r($veri[0][0]);
                
                ?>
	</center>
   </div>
   <div class="card-footer text-muted"><center>
    <?php 
                $corona = file_get_contents('https://covid19.tubitak.gov.tr/anasayfa'); 
                preg_match_all('@<div class="date">Son Güncelleme: (.*?)</div>@si',$corona,$veri);
                print_r($veri[0][0]);
                
                ?>
    </center>
   </div>
   </div>
</body>
</html>