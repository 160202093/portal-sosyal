# portal-sosyal

Ödev modülünü portalınıza eklemek için yapmanız gereken işlemler

1-) Portal içerisindeki composer.json dosyasında repositories bölümüne modülün linkini eklemek. { "type": "vcs", "url": "https://github.com/160202093/portal-sosyal.git" },

2-) Portal klasörünün içerisindeki portal/backend/config/main.php , portal/frontend/config/main.php , portal/api/config/main.php dosyalarındaki modules bölümüne kendi modülünüzü eklemeniz gerekmektedir.

3-) Composer.json a eklediğimiz repoyu sistemimize eklemek için vagrant ssh yaptıktan sonra cd /var/www/portal dizininde composer update veya composer require kouosl/portal-nobetlistesi:dev-master komutunu çalıştırınız.

4-) Migration dosyası uplanarak veri tabanına modülde kullandığımız tablolar eklenir. Bunun için vagrant ssh da "php yii migrate --migrationPath=@vendor/kouosl/portal-sosyal/migrations --interactive=0" komutu çalıştırılır

Bu dört adımı uyguladığınızda migrationdaki tablolar veri tabanına eklenecek ve github daki ödev modülü portal/vendor/kouosl dizininin altına portal-Odev olarak oluşarak portal.kouosl adresinden erişilebilir hale gelecektir. Erişmek istediğiniz sayfaya http://portal.kouosl/admin/sosyal/sosyal şeklinde erişebilirsiniz.