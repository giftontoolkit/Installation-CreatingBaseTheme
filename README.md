# Installation and Creating-Basic-theme

- download wordpress from wordpress.org
- create a folder in `c/wamp/`. I named the folder as as `gifton_2`. Extract all files of downloaded `wordpress` in this folder.
- create database in localhost/phpmyadmin. I set name of database as `db_gifton_2`
- create `wp-config.php` by copying `wp-config-sample.php`
- set followings in this file

  - DB_NAME as `db_gifton_2`
  - DB_USER as `root`
  - DB_PASSWORD as `' '` i.e., null

- open URL as `localhost/gifton_2`
- and follow options.

  - gif database name and password prompt, then give above detail.
  - Otherwise
    - I used following creditials
      - Username: Gifton
      - Password: Gifton123A

- create folder in `www/gifton_2/wp-content/themes/`. I set name as `gifton_2`
- Copy all files from `v1` folder and paste into above created folder

Now below links will be active

```console
localhost/gifton_2/wp-admin
```

```console
localhost/gifton_2/
```

In `wp-admin` link, there are some options in `Apprerance/Customize`.

**We will increase these customize-options in our upcoming repositories.**

Till this repo, we just obtain below built-in options

![All Customize Options](/images/customize_start.jpg)
![Site Identity Options](/images/site_identity_options.jpg)
![Menu Options](/images/menu_options.jpg)
![HomePage Options](/images/homePage_options.jpg)
