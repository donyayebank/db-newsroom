<?php
defined('ABSPATH') || exit;
?>

<div class="wrap dbnp-wrap">

    <h1>📰 DB Newsroom</h1>

    <p>
        <strong>نسخه <?php echo esc_html(DBNP_VERSION); ?></strong>
    </p>

    <hr>

    <h2>به سامانه اختصاصی تحریریه دنیای بانک خوش آمدید.</h2>

    <p>
        هسته افزونه با موفقیت بارگذاری شده است.
    </p>

    <table class="widefat striped" style="max-width:700px;margin-top:20px;">
        <tbody>
            <tr>
                <td><strong>وضعیت افزونه</strong></td>
                <td style="color:green;">✅ فعال</td>
            </tr>

            <tr>
                <td><strong>نسخه</strong></td>
                <td><?php echo esc_html(DBNP_VERSION); ?></td>
            </tr>

            <tr>
                <td><strong>نسخه PHP</strong></td>
                <td><?php echo esc_html(PHP_VERSION); ?></td>
            </tr>

            <tr>
                <td><strong>نسخه وردپرس</strong></td>
                <td><?php echo esc_html(get_bloginfo('version')); ?></td>
            </tr>

        </tbody>
    </table>

</div>
