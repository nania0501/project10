<!DOCTYPE html>
<html>
    <head>
        <title>Request dengan input laravel</tittle>
    <head>
    <body>
    <form action="/formulir/proses" method="post">
        @csrf

        nama : <input type="text" name="nama"><br/>
        alamat : <input type="text" name="alamat"><br/>
        <input type="submit" value="simpan">
    </form>
</body>
</body>
