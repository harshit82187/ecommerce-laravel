<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form Submission</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; margin: 0; padding: 0;">
    <div style="max-width: 600px; margin: 20px auto; padding: 20px; background-color: #ffffff; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.02), 0px 0px 0px 1px rgba(27, 31, 35, 0.15);">
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <th colspan="2">
                    <img style="width: 100%;" src="https://test.pearl-developer.com/neo-infra/public/assets/images/logo.png" alt="">
                </th>
            </tr>
            <tr>
                <th colspan="2">
                    <h2 style="text-align: center; color: #333;">Enquiry Form Submission</h2>
                </th>
            </tr>
            <tr>
                <td style="padding: 10px 0; border-bottom: 1px solid #ddd;"><strong>Name:</strong></td>
                <td style="padding: 10px 0; border-bottom: 1px solid #ddd;">{{ $data['name']  ?? '' }}</td>
            </tr>
            <tr>
                <td style="padding: 10px 0; border-bottom: 1px solid #180d0d;"><strong>Email:</strong></td>
                <td style="padding: 10px 0; border-bottom: 1px solid #180d0d;">{{ $data['email']  ?? '' }}</td>
            </tr>
        
            <tr>
                <td style="padding: 10px 0; border-bottom: 1px solid #ddd;"><strong>Message:</strong></td>
                <td style="padding: 10px 0; border-bottom: 1px solid #ddd;">{{ $data['message']  ?? '' }}</td>
            </tr>
           
        </table>
        
    </div>
</body>

</html>