# site-param

Adalah service provider yang menyediakan layanan site param. Yaitu site setting
yang disimpan di database. Service ini bisa diakses dari kontroler dengan perintah
`$this->setting->{setting_name}`.

Tidak ada konfigurasi tambahan pada level admin, tapi service ini membutuhkan module
database.