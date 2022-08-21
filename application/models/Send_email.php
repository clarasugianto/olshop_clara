<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_email extends CI_Model {

	 public function sendMail($email,$nama){
    $message='<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="border-collapse:collapse;border-spacing:0;margin:0;padding:0">
    <tbody><tr>
    <td style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse:collapse;border-spacing:0;margin:0 auto;padding:0">
    <tbody><tr>
    <td align="left" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    <table width="100%" style="border-collapse:collapse;border-spacing:0;margin:0;padding:0">
    <tbody><tr>
    <td height="20" width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="20" width="550" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="20" width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    </tr>
    <tr>
    <td width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td align="center" width="550" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    <img src="https://i.ibb.co/rw8hMVm/logo1.png" width="150px" height="150px"  style="width:176px;line-height:100%;outline:none;text-decoration:none;border:0 none">
    </td>
    <td width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    </tr>
    <tr>
    <td height="20" width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="20" width="550" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="20" width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    </tr>
    </tbody></table>

    </td>
    </tr>
    <tr>
    <td bgcolor="#ffffff" id="m_5211643893664136156contentContainer" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    <table align="left" width="100%" style="border-collapse:collapse;border-spacing:0;margin:0;padding:0">
    <tbody><tr>
    <td height="20" width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="20" width="550" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="20" width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    </tr>
    <tr>
    <td width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td align="left" width="550" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    <table align="left" width="100%" style="border-collapse:collapse;border-spacing:0;margin:0;padding:0">
    <tbody><tr>
    <td style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    <p style="font-family:&quot;Arial&quot;,sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">Hai '. $nama .',</p>

    <div style="margin:10px 0px">
    <p style="font-family:&quot;Arial&quot;,sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">Kami telah menerima pendaftaran akun kamu di <a href="http://localhost/olshop" style="font-family:&quot;Arial&quot;,sans-serif;color:#a30046!important;line-height:1.5;text-decoration:none;font-size:14px;margin:0;padding:0" target="_blank">JOLEBO e-Shop</a>. Segera <strong style="color:#555;font-size:14px">konfirmasi e-mail kamu</strong> di sini ya,</p>

    </div>
    <br>
    <div style="background-color:#f4f4f4;padding-top:20px;padding-bottom:20px">
    <a class="m_5211643893664136156button" href="http://localhost/olshop/index.php/user/verify/' . md5($email) . '" style="font-family:&quot;Arial&quot;,sans-serif;color:#ffffff!important;line-height:1.5;text-decoration:none!important;display:block;clear:both;width:50%;text-align:center;background-color:#a30046;font-size:14px;margin:0 auto;padding:10px 0" target="_blank">
    <center style="color:#ffffff">
    Konfirmasi E-mail
    </center>
    </a>
    </div>
    <br>
    <div style="margin:10px 0px">
    <p style="font-family:&quot;Arial&quot;,sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">Segala bentuk informasi seperti nomor kontak, alamat e-mail, atau password kamu bersifat rahasia. Jangan menginformasikan data-data tersebut kepada siapa pun, termasuk kepada pihak yang mengatasnamakan JOLEBO e-Shop.</p>
    </div>
    </td>
    </tr>
    </tbody></table>
    <table width="100%" style="border-collapse:collapse;border-spacing:0;margin:0;padding:0">
    <tbody><tr>
    <td id="m_5211643893664136156thanksContainer" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    <p style="font-family:&quot;Arial&quot;,sans-serif;color:#555;line-height:1.5;font-size:14px;margin:0;padding:0">

    </p>
    </td>
    </tr>
    </tbody></table>


    </td>
    <td width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    </tr>
    <tr>
    <td height="30" width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="30" width="550" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="30" width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    </tr>
    </tbody></table>

    </td>
    </tr>
    <tr>
    <td style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    <table align="left" id="m_5211643893664136156securityAnnouncementWrapper" width="100%" style="border-collapse:collapse;border-spacing:0;font-size:12px;margin:0;padding:0" bgcolor="#f0f0f0">
    <tbody><tr>
    <td height="5" width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="5" width="24" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="5" width="10" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="5" width="516" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="5" width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    </tr>
    <tr>
    <td width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="26" width="24" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    <img alt="Hati-hati" src="https://ci3.googleusercontent.com/proxy/sNv_Mw7e9E84hPi1cfWdog9ySUX1MtmDZoWzOcyM-u2urpU0lW84b_Jbt-ZxFWXXyjRgTeMJNg6tRvTs0pASeJ1MRnk=s0-d-e1-ft#https://www.bukalapak.com/images/icon_warning.png" style="height:auto;line-height:100%;outline:none;text-decoration:none;border:0 none" class="CToWUd">
    </td>
    <td width="10" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td align="left" width="516" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    <p style="font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    Segala bentuk informasi seperti
    <b>
    nomor kontak, alamat e-mail, atau password kamu bersifat rahasia.
    </b>
    Jangan menginformasikan data-data tersebut kepada siapa pun, termasuk kepada pihak yang mengatasnamakan JOLEBO e-Shop.
    </p>
    </td>
    <td width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    </tr>
    <tr>
    <td height="5" width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="5" width="24" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="5" width="10" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="5" width="516" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    <td height="5" width="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    </tr>
    </tbody></table>

    </td>
    </tr>
    <tr>
    <td style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    <table width="100%" style="border-collapse:collapse;border-spacing:0;margin:0;padding:0">
    <tbody><tr>
    <td height="30" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    </tr>
    <tr>
    <td style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    <table align="left" class="m_5211643893664136156footerWrapper" style="text-align:left;border-collapse:collapse;border-spacing:0;font-size:11px;line-height:1.7;margin:0;padding:0" width="300">
    <tbody><tr>
    <td style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0 10px">
    <p style="font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    Copyright &copy; 2019 PT JOLEBO e-Shop. All Rights Reserved
    </p>
    <p style="font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    Gang Buntet Dalan Ruwet  No. Rajelas
    </p>
    <p style="font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    Ngipik Ngisor Tempek
    </p>
    </td>
    </tr>
    <tr>
    <td height="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    </tr>
    </tbody></table>
    <table align="right" class="m_5211643893664136156footerWrapper m_5211643893664136156text-right" width="250" style="border-collapse:collapse;border-spacing:0;text-align:right;font-size:11px;line-height:1.7;margin:0;padding:0">
    </tbody></table>
    </td>
    </tr>
    <tr>
    <td height="15" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    </tr>
    </tbody></table>

    </td>
    </tr>
    <tr>
    <td style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    <table id="m_5211643893664136156footerSeparator" width="100%" style="border-collapse:collapse;border-spacing:0;table-layout:fixed;border-top-width:2px;border-top-style:solid;border-top-color:#ccc;margin:0;padding:0">
    <tbody><tr>
    <td height="2" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    </tr>
    </tbody></table>
    </td>
    </tr>
    <tr>
    <td style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    <table id="m_5211643893664136156additionalFooterWrapper" width="100%" style="border-collapse:collapse;border-spacing:0;font-size:10px;text-align:center;margin:0;padding:0">
    <tbody><tr>
    <td height="10" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    </tr>
    <tr>
    <td style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0 10px">
    <p style="font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    Anda memperoleh e-mail ini karena keanggotaan Anda pada JOLEBO e-Shop
    </p>
    </td>
    </tr>
    <tr>
    <td height="5" style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0"></td>
    </tr>
    <tr>
    <td style="border-collapse:collapse;border-spacing:0;font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0 10px">
    <p style="font-family:&quot;Arial&quot;,sans-serif;color:#999;line-height:1.5;margin:0;padding:0">
    Harap jangan membalas e-mail ini, karena e-mail ini dikirimkan secara otomatis oleh sistem.
    </p>
    </td>
    </tr>
    </tbody></table>
    ';
   $config = [
                 'mailtype'  => 'html',
                 'charset'   => 'utf-8',
                 'protocol'  => 'smtp',
                 'smtp_host' => 'ssl://smtp.sendgrid.net',
                 'smtp_user' => 'apikey',    // Ganti dengan email gmail kamu
                 'smtp_pass' => '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',      // Password gmail kamu
                 'smtp_port' => 465,
                  '_smtp_auth' =>TRUE,
                 'crlf'      => "\r\n",
                 'newline'   => "\r\n"
             ];
             $this->load->library('email', $config);
             $this->email->initialize($config);

          // Email dan nama pengirim
             $this->email->from('no-reply@joleboshop.com', 'JOLEBO e-Shop');

          // Email penerima
          $this->email->to($email); // Ganti dengan email tujuan kamu

          // Subject email
          $this->email->subject('Segera Konfirmasi Email Anda');

          // Isi email
          $this->email->message($message);

          return $this->email->send();


      }
    public function verify($key) {
      // nilai dari status yang berawal dari Tidak Aktif akan diubah menjadi Aktif disini
      $data = array('status_pelanggan' => "1");
      $this->db->where('md5(email)', $key);
      return $this->db->update('member', $data);
  }

     public function kirim_sukses($alamat,$resi,$faktur,$telepon,$produkN,$nama,$email,$kurir){
    $message='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta content="width=device-width" name="viewport"/>
<!--[if !mso]><!-->
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<!--<![endif]-->
<title></title>
<!--[if !mso]><!-->
<!--<![endif]-->
<style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }

        table,
        td,
        tr {
            vertical-align: top;
            border-collapse: collapse;
        }

        * {
            line-height: inherit;
        }

        a[x-apple-data-detectors=true] {
            color: inherit !important;
            text-decoration: none !important;
        }
    </style>
<style id="media-query" type="text/css">
        @media (max-width: 520px) {

            .block-grid,
            .col {
                min-width: 320px !important;
                max-width: 100% !important;
                display: block !important;
            }

            .block-grid {
                width: 100% !important;
            }

            .col {
                width: 100% !important;
            }

            .col>div {
                margin: 0 auto;
            }

            img.fullwidth,
            img.fullwidthOnMobile {
                max-width: 100% !important;
            }

            .no-stack .col {
                min-width: 0 !important;
                display: table-cell !important;
            }

            .no-stack.two-up .col {
                width: 50% !important;
            }

            .no-stack .col.num4 {
                width: 33% !important;
            }

            .no-stack .col.num8 {
                width: 66% !important;
            }

            .no-stack .col.num4 {
                width: 33% !important;
            }

            .no-stack .col.num3 {
                width: 25% !important;
            }

            .no-stack .col.num6 {
                width: 50% !important;
            }

            .no-stack .col.num9 {
                width: 75% !important;
            }

            .video-block {
                max-width: none !important;
            }

            .mobile_hide {
                min-height: 0px;
                max-height: 0px;
                max-width: 0px;
                display: none;
                overflow: hidden;
                font-size: 0px;
            }

            .desktop_hide {
                display: block !important;
                max-height: none !important;
            }
        }
    </style>
</head>
<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #FFFFFF;">
<!--[if IE]><div class="ie-browser"><![endif]-->
<table bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#FFFFFF"><![endif]-->
<div style="background-color:transparent;">
<div class="block-grid no-stack" style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="500" style="background-color:transparent;width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;">
<p style="font-size: 14px; line-height: 1.2; mso-line-height-alt: 17px; margin: 0;"> </p>
<p style="font-size: 14px; line-height: 1.2; mso-line-height-alt: 17px; margin: 0;"> </p>
<p style="font-size: 14px; line-height: 1.2; mso-line-height-alt: 17px; margin: 0;"> </p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid two-up no-stack" style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #6747C7;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:#6747C7;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px"><tr class="layout-full-width" style="background-color:#6747C7"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="250" style="background-color:#6747C7;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num6" style="max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;">
<p style="font-size: 24px; line-height: 1.2; mso-line-height-alt: 29px; margin: 0;"><span style="font-size: 24px; color: #000000;"><strong><span style="font-size: 24px;">JoleboShop</span></strong></span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align="center" width="250" style="background-color:#6747C7;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num6" style="max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 25px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:2;padding-top:10px;padding-right:10px;padding-bottom:25px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 2; color: #555555; mso-line-height-alt: 24px;">
<p style="font-size: 14px; line-height: 2; text-align: right; mso-line-height-alt: 28px; margin: 0;"><span style="color: #000000; font-size: 14px;"><strong><span style="font-size: 16px;">Pesanan Dikirim</span></strong></span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid no-stack" style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="500" style="background-color:transparent;width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;">
<p style="font-size: 14px; line-height: 1.2; mso-line-height-alt: 17px; margin: 0;"><strong><span style="font-size: 16px;">Halo '.$nama.',</span></strong></p>
<p style="font-size: 16px; line-height: 1.2; mso-line-height-alt: 19px; margin: 0;"><span style="font-size: 16px;">Pesanan "'.$produkN.'" Telah Dikirim Dari Gudang Kami<br/></span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="0" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 3px solid #555555; height: 0px; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td height="0" style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid two-up no-stack" style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="250" style="background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num6" style="max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;"><span style="font-size: 16px;">No Faktur :</span></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align="center" width="250" style="background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num6" style="max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;"><strong><span style="font-size: 16px;">'.$faktur.'</span></strong></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid two-up no-stack" style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="250" style="background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num6" style="max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;"><span style="font-size: 16px;">Penjual :<br/></span></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align="center" width="250" style="background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num6" style="max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;"><strong><span style="font-size: 16px;">Jolebo e-Shop<br/></span></strong></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid two-up no-stack" style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="250" style="background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num6" style="max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;">
<p style="font-size: 16px; line-height: 1.2; mso-line-height-alt: 19px; margin: 0;"><span style="font-size: 16px;">Jasa Pengiriman :</span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align="center" width="250" style="background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num6" style="max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;">
<p style="font-size: 12px; line-height: 1.2; mso-line-height-alt: 14px; margin: 0;"><strong><span style="font-size: 16px;">'.$kurir.'</span></strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="0" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; height: 0px; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td height="0" style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid two-up no-stack" style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="250" style="background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num6" style="max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;"><span style="font-size: 16px;">Nomor Resi :</span></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align="center" width="250" style="background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num6" style="max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;">
<p style="font-size: 12px; line-height: 1.2; mso-line-height-alt: 14px; margin: 0;"><strong><span style="font-size: 16px;">'.$resi.'</span></strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="0" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; height: 0px; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td height="0" style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid two-up no-stack" style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="250" style="background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num6" style="max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;"><span style="font-size: 16px;">Nama Penerima :</span></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align="center" width="250" style="background-color:transparent;width:250px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num6" style="max-width: 320px; min-width: 250px; display: table-cell; vertical-align: top; width: 250px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;">
<p style="font-size: 12px; line-height: 1.2; mso-line-height-alt: 14px; margin: 0;"><strong><span style="font-size: 16px;">'.$nama.'<br/></span></strong></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="0" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; height: 0px; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td height="0" style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid no-stack" style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="500" style="background-color:transparent;width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<div align="center" class="button-container" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.jne.co.id/en/tracking/trace" style="height:31.5pt; width:117pt; v-text-anchor:middle;" arcsize="10%" stroke="false" fillcolor="#6747C7"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:16px"><![endif]--><a href="https://www.jne.co.id/en/tracking/trace" style="-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #ffffff; background-color: #6747C7; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; width: auto; width: auto; border-top: 1px solid #6747C7; border-right: 1px solid #6747C7; border-bottom: 1px solid #6747C7; border-left: 1px solid #6747C7; padding-top: 5px; padding-bottom: 5px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; text-align: center; mso-border-alt: none; word-break: keep-all;" target="_blank"><span style="padding-left:20px;padding-right:20px;font-size:16px;display:inline-block;">
<span style="font-size: 16px; line-height: 2; mso-line-height-alt: 32px;">Lacak Pesanan</span>
</span></a>
<!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
</div>
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="0" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 3px solid #555555; height: 0px; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td height="0" style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid no-stack" style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #E0E0E0;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:#E0E0E0;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px"><tr class="layout-full-width" style="background-color:#E0E0E0"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="500" style="background-color:#E0E0E0;width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;">
<p style="font-size: 12px; line-height: 1.2; mso-line-height-alt: 14px; margin: 0;"><strong><span style="font-size: 16px;">Tujuan Pengiriman :</span></strong></p>
<p style="font-size: 14px; line-height: 1.2; mso-line-height-alt: 17px; margin: 0;"><span style="font-size: 14px;"><span style="font-size: 14px;">'.$nama.'</span></span></p>
<p style="font-size: 14px; line-height: 1.2; mso-line-height-alt: 17px; margin: 0;"><span style="font-size: 14px;"><span style="font-size: 14px;">'.$alamat.'</span></span></p>
<p style="font-size: 14px; line-height: 1.2; mso-line-height-alt: 17px; margin: 0;"><span style="font-size: 14px;"><span style="font-size: 14px;">'.$telepon.'</span></span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="500" style="background-color:transparent;width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<div align="center" class="img-container center fixedwidth" style="padding-right: 0px;padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><img align="center" alt="Image" border="0" class="center fixedwidth" src="https://i.ibb.co/rw8hMVm/logo1.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 125px; display: block;" title="Image" width="125"/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid no-stack" style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="500" style="background-color:transparent;width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;">
<p style="font-size: 12px; line-height: 1.2; text-align: center; mso-line-height-alt: 14px; margin: 0;">Email Ini Dibuat Secara Otomatis.</p>
<p style="font-size: 12px; line-height: 1.2; text-align: center; mso-line-height-alt: 14px; margin: 0;">Mohon Tidak Mengirim Balasan ke Email Ini</p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #BBBBBB; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid no-stack" style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="500" style="background-color:transparent;width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<p style="font-size: 12px; line-height: 1.2; text-align: center; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14px; margin: 0;">Ikuti Kami :</p>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<table cellpadding="0" cellspacing="0" class="social_icons" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table activate="activate" align="center" alignment="alignment" cellpadding="0" cellspacing="0" class="social_table" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: undefined; mso-table-tspace: 0; mso-table-rspace: 0; mso-table-bspace: 0; mso-table-lspace: 0;" to="to" valign="top">
<tbody>
<tr align="center" style="vertical-align: top; display: inline-block; text-align: center;" valign="top">
<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 10px; padding-left: 10px;" valign="top"><a href="https://www.facebook.com/yayak.sibatossii" target="_blank"><img alt="Facebook" height="32" src="https://i.ibb.co/m5pMp9S/fb.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;" title="Facebook" width="32"/></a></td>
<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 10px; padding-left: 10px;" valign="top"><a href="https://twitter.com/yayakzbr" target="_blank"><img alt="Twitter" height="32" src="https://i.ibb.co/GCypjD1/twitter.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;" title="Twitter" width="32"/></a></td>
<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 10px; padding-left: 10px;" valign="top"><a href="https://instagram.com/yayakzbr" target="_blank"><img alt="Instagram" height="32" src="https://i.ibb.co/G5qzDc8/ig.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;" title="Instagram" width="32"/></a></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid no-stack" style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #E0E0E0;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:#E0E0E0;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px"><tr class="layout-full-width" style="background-color:#E0E0E0"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="500" style="background-color:#E0E0E0;width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.2; color: #555555; mso-line-height-alt: 14px;">
<p style="font-size: 14px; line-height: 1.2; text-align: center; mso-line-height-alt: 17px; margin: 0;">Jika butuh bantuan, gunakan halaman Kontak</p>
<p style="font-size: 14px; line-height: 1.2; text-align: center; mso-line-height-alt: 17px; margin: 0;">Kami.</p>
<p style="font-size: 14px; line-height: 1.2; text-align: center; mso-line-height-alt: 17px; margin: 0;">© 2019, PT Jolebo</p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid no-stack" style="Margin: 0 auto; min-width: 320px; max-width: 500px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="500" style="background-color:transparent;width:500px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 500px; display: table-cell; vertical-align: top; width: 500px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<p style="font-size: 12px; line-height: 1.2; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14px; margin: 0;"> </p>
<p style="font-size: 12px; line-height: 1.2; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14px; margin: 0;"> </p>
<p style="font-size: 12px; line-height: 1.2; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14px; margin: 0;"> </p>
<p style="font-size: 12px; line-height: 1.2; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14px; margin: 0;"> </p>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
</td>
</tr>
</tbody>
</table>
<!--[if (IE)]></div><![endif]-->
</body>
</html>';
    $config = [
                 'mailtype'  => 'html',
                 'charset'   => 'utf-8',
                 'protocol'  => 'smtp',
                 'smtp_host' => 'smtp.sendgrid.net',
                 'smtp_user' => 'apikey',    // Ganti dengan email gmail kamu
                 'smtp_pass' => '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',      // Password gmail kamu
                 'smtp_port' => 587,
                  '_smtp_auth' =>TRUE,
                 'crlf'      => "\r\n",
                 'newline'   => "\r\n"
             ];
             $this->load->library('email', $config);
             $this->email->initialize($config);

          // Email dan nama pengirim
             $this->email->from('support@joleboshop.com', 'JOLEBO e-Shop');

          // Email penerima
          $this->email->to($email); // Ganti dengan email tujuan kamu

          // Subject email
          $this->email->subject('Konfirmasi Pengiriman Barang');

          // Isi email
          $this->email->message($message);

          return $this->email->send();


      }

}

/* End of file Send_email.php */
/* Location: ./application/models/Send_email.php */