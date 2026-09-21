<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Pesan Baru dari Website</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; margin: 0;">

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" style="max-width: 600px; background-color: #ffffff; border-radius: 8px; overflow: hidden;" cellpadding="0" cellspacing="0">

                    {{-- Header --}}
                    <tr>
                        <td style="background-color: #1e3a8a; padding: 20px 30px;">
                            <h2 style="color: #ffffff; margin: 0; font-size: 20px;">
                                📩 Pesan Baru dari Website SMKN 1 CIJATI
                            </h2>
                        </td>
                    </tr>

                    {{-- Isi Pesan --}}
                    <tr>
                        <td style="padding: 30px;">
                            <table role="presentation" width="100%" cellpadding="8" cellspacing="0">
                                <tr>
                                    <td style="width: 100px; color: #6b7280; font-weight: bold; vertical-align: top;">Nama</td>
                                    <td style="color: #111827;">{{ $data['nama'] }}</td>
                                </tr>
                                <tr>
                                    <td style="color: #6b7280; font-weight: bold; vertical-align: top;">Email</td>
                                    <td style="color: #111827;">
                                        <a href="mailto:{{ $data['email'] }}" style="color: #1e3a8a; text-decoration: none;">{{ $data['email'] }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: #6b7280; font-weight: bold; vertical-align: top;">Subjek</td>
                                    <td style="color: #111827;">{{ $data['subjek'] }}</td>
                                </tr>
                            </table>

                            <hr style="border: none; border-top: 1px solid #e5e7eb; margin: 20px 0;">

                            <p style="color: #6b7280; font-weight: bold; margin: 0 0 8px 0;">Isi Pesan</p>
                            <p style="color: #111827; line-height: 1.6; white-space: pre-line; margin: 0;">{{ $data['pesan'] }}</p>
                        </td>
                    </tr>

                    {{-- Footer --}}
                    <tr>
                        <td style="background-color: #f9fafb; padding: 16px 30px; text-align: center;">
                            <p style="color: #9ca3af; font-size: 12px; margin: 0;">
                                Pesan ini dikirim otomatis dari formulir kontak Website SMKN 1 CIJATI.<br>
                                Balas email ini untuk membalas langsung ke pengirim.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>