# site-param

Adalah service provider yang menyediakan layanan site param. Yaitu site setting
yang disimpan di database. Service ini bisa diakses dari kontroler dengan perintah
`$this->setting->{setting_name}`.

Tidak ada konfigurasi tambahan pada level aplikasi, tapi service ini membutuhkan
module database.

Semua data setting disimpan di tabel `site_param`. Masing-masing item memiliki type
yaitu:

1. inline text
1. date
1. number
1. boolean
1. multi line
1. url
1. email
1. color