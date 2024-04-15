<!DOCTYPE html>
<html>
<head>
    <style>

    </style>
</head>
<body>
    <p>Paldi, Berikut daftar temanmu yang ulang tahun hari ini:</p>
    <table class="table table-bordered" width="800px" border="1">
        <tr>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Whatsapp</th>
            <th>Facebook</th>
            <th>Instagram</th>
        </tr>
         @foreach($data as $friend)
         <tr>
             <td>{{ $friend['friend_name']}}</td>
             <td>{{ $friend['friend_birthday_date']}}</td>
             <td>{{ $friend['friend_email'] ?? "-" }}</td>
             <td>{{ $friend['friend_whatsapp'] ?? "-" }}</td>
             <td>{{ $friend['friend_facebook'] ?? "-" }}</td>
             <td>{{ $friend['friend_instagram'] ?? "-" }}</td>
         </tr>
         @endforeach
    </table>

    <p>this Message sent automated by Birthday System Reminder</p>
    <p>Created by Febrari Supaldi</p>
</body>
</html>
