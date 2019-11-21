<?php
header("Content-type:text/html; charset=utf8");

require_once "Classes/Produtos.php";

$produtos = new Produtos();
$listar = $produtos->listar();

?>
<!DOCTYPE html>
<html lang="pt-PT">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>Home - Alpec</title><!-- Add icon library -->

    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='css/bootstrap.css' type='text/css' />
    <link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' />
    <link rel='stylesheet' id='wp-block-library-css' href='https://alpec.com.br/wp-includes/css/dist/block-library/style.min.css?ver=5.2.4' type='text/css' media='all' data-viewport-units-buggyfill='ignore' />
    <link rel='stylesheet' id='contact-form-7-css' href='https://alpec.com.br/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.4' type='text/css' media='all' data-viewport-units-buggyfill='ignore' />
    <link rel='stylesheet' id='foobox-free-min-css' href='https://alpec.com.br/wp-content/plugins/foobox-image-lightbox/free/css/foobox.free.min.css?ver=2.7.5' type='text/css' media='all' data-viewport-units-buggyfill='ignore' />
    <link rel='stylesheet' id='mptt-style-css' href='https://alpec.com.br/wp-content/plugins/mp-timetable/media/css/style.css?ver=2.3.4' type='text/css' media='all' data-viewport-units-buggyfill='ignore' />
    <link rel='stylesheet' id='boldthemes_style_css-css' href='https://alpec.com.br/wp-content/themes/medicare/style.crush.css?ver=5.2.4' type='text/css' media='screen' data-viewport-units-buggyfill='ignore' />
    <style id='boldthemes_style_css-inline-css' type='text/css'>
        select,
        input {
            font-family: Barlow;
        }

        body {
            font-family: Barlow;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: Montserrat;
        }

        a:hover {
            color: #0e296e;
        }

        .btLoader {
            border-right: 2px solid #0e296e;
        }

        .btBreadCrumbs {
            font-family: Barlow Condensed;
        }

        .btPageHeadline header .dash .headline:after {
            background: #0e296e;
        }

        .btAccentColorBackground {
            background-color: #0e296e !important;
        }

        .btAleternateColorBackground {
            background-color: #0e296e !important;
        }

        .topTools .btIconWidgetIcon:hover .btIco .btIcoHolder em,
        .btIconWidget .btIconWidgetIcon:hover .btIco .btIcoHolder em {
            color: #0e296e !important;
        }

        .menuPort {
            font-family: Barlow;
        }

        .menuPort nav ul li a:hover {
            color: #0e296e !important;
        }

        .menuPort nav>ul>li.menu-item-has-children>a:before {
            border-bottom: 6px solid #0e296e;
        }

        .btMenuHorizontal .menuPort nav>ul>li.current-menu-ancestor>a,
        .btMenuHorizontal .menuPort nav>ul>li.current-menu-item>a {
            -webkit-box-shadow: 0 -3px 0 0 #0e296e inset;
            box-shadow: 0 -3px 0 0 #0e296e inset;
        }

        .btMenuHorizontal .menuPort nav>ul>li>ul li.current-menu-ancestor>a,
        .btMenuHorizontal .menuPort nav>ul>li>ul li.current-menu-item>a {
            color: #0e296e !important;
        }

        .btMenuVertical nav li.current-menu-ancestor>a,
        .btMenuVertical nav li.current-menu-item>a {
            color: #0e296e !important;
        }

        .subToggler:before {
            color: #0e296e;
        }

        body.btMenuHorizontal .menuPort ul ul li:first-child>a {
            border-top: 3px solid #0e296e;
        }

        body.btMenuHorizontal .menuPort>nav>ul>li.btMenuWideDropdown>ul>li>a,
        body.btMenuHorizontal .menuPort>nav>ul>li.btMenuWideDropdown>ul>li:first-child>a {
            border-top: 3px solid #0e296e;
        }

        .btVerticalMenuTrigger:hover .btIco:before,
        .btVerticalMenuTrigger:hover .btIco:after {
            border-top-color: #0e296e;
        }

        .btVerticalMenuTrigger:hover .btIco .btIcoHolder:after {
            border-top-color: #0e296e;
        }

        @media (min-width:1200px) {
            .btMenuVerticalOn .btVerticalMenuTrigger .btIco a:before {
                color: #0e296e !important;
            }
        }

        .topBar .widget_search button:hover:before,
        .topBarInMenu .widget_search button:hover:before {
            color: #0e296e;
        }

        .btDarkSkin .topBar .widget_search button:hover:before,
        .btDarkSkin .topBarInMenu .widget_search button:hover:before,
        .btLightSkin .btDarkSkin .topBar .widget_search button:hover:before,
        .btLightSkin .btDarkSkin .topBarInMenu .widget_search button:hover:before {
            color: #0e296e;
        }

        .btLightSkin button:hover:before,
        .btDarkSkin .btLightSkin button:hover:before {
            color: #0e296e;
        }

        .topBarInLogoAreaCell {
            border: 0 solid #0e296e;
        }

        .topBarInLogoAreaCell .btSpecialHeaderIcon .btIconWidgetIcon .btIco .btIcoHolder:before,
        .topBarInLogoAreaCell .btSpecialHeaderIcon .btIconWidgetIcon .btIco .btIcoHolder:after {
            color: #0e296e;
        }

        .topTools.btTopToolsLeft .btIco .btIcoHolder {
            background-color: #0e296e;
        }

        .topTools.btTopToolsLeft .btIco .btIcoHolder:hover {
            background-color: #0e296e;
        }

        .topTools.btTopToolsLeft .btSpecialHeaderIcon .btIco .btIcoHolder {
            background-color: #0e296e;
        }

        .topTools.btTopToolsLeft .btSpecialHeaderIcon .btIco .btIcoHolder:hover {
            background-color: #0e296e;
        }

        .infoToggler:before {
            background-color: #0e296e;
            border: 1px solid #0e296e;
        }

        .infoToggler:after {
            color: #0e296e;
            border: 1px solid #0e296e;
        }

        .infoToggler.on:after {
            background-color: #0e296e;
        }

        .infoToggler.on:before {
            color: #0e296e;
        }

        .btSiteFooter .menu li.btPageTop a:after {
            color: #0e296e;
        }

        .btSiteFooter .menu a:hover {
            color: #0e296e;
        }

        .btCustomMenu ul li a:hover {
            color: #0e296e;
        }

        .btCustomMenu ul li.btPageTop a:after {
            color: #0e296e;
        }

        .btInlineFooterMenu.btCustomMenu ul li>a {
            color: #0e296e;
        }

        .btFooterWrap.btDarkSkin .btBox h4 .headline a:hover,
        .btFooterWrap.btLightSkin .btBox h4 .headline a:hover {
            color: #0e296e;
        }

        .sticky .headline {
            color: #0e296e;
        }

        .headline a {
            color: #0e296e;
        }

        .single-portfolio h1,
        .single-post h1,
        .single-portfolio h2,
        .single-post h2 {
            color: #0e296e;
        }

        .portfolioItem dt,
        .btPortfolioSingleItemColumns dt {
            color: #0e296e;
        }

        .btArticleListItem.btBlogColumnView .btArticleListBodyAuthor a,
        .btPostSingleItemColumns .btArticleListBodyAuthor a {
            color: #0e296e !important;
        }

        .commentTxt p.edit-link a:hover,
        .commentTxt p.reply a:hover {
            color: #0e296e;
        }

        .btBox>h4 {
            font-family: Barlow Condensed;
        }

        .btBox>h4:after {
            background-color: #0e296e;
        }

        .btBox ul li a:hover {
            color: #0e296e;
        }

        .btBox.widget_calendar table caption {
            background: #0e296e;
            font-family: Montserrat;
        }

        .btBox.widget_archive ul li a:hover,
        .btBox.widget_categories ul li a:hover,
        .btCustomMenu ul li a:hover {
            border-bottom: 1px solid #0e296e;
        }

        .btDarkSkin .btBox.widget_archive ul li a:hover,
        .btLightSkin .btDarkSkin .btBox.widget_archive ul li a:hover,
        .btDarkSkin .btBox.widget_categories ul li a:hover,
        .btLightSkin .btDarkSkin .btBox.widget_categories ul li a:hover {
            border-bottom: 1px solid #0e296e;
        }

        .btBox.widget_rss li a.rsswidget {
            font-family: Montserrat;
        }

        .btBox.widget_rss li cite:before {
            color: #0e296e;
        }

        .btBox .btSearch button,
        .btBox .btSearch input[type=submit],
        form.woocommerce-product-search button,
        form.woocommerce-product-search input[type=submit] {
            background: #0e296e;
        }

        .btBox .btSearch button:hover,
        form.woocommerce-product-search button:hover {
            background: #05102a;
        }

        form.wpcf7-form input[type="text"],
        form.wpcf7-form input[type="password"],
        form.wpcf7-form input[type="email"],
        form.wpcf7-form input[type="date"],
        form.wpcf7-form textarea,
        form.wpcf7-form .fancy-select .trigger {
            font-family: Barlow;
        }

        form.wpcf7-form input[type="text"]:focus,
        form.wpcf7-form input[type="password"]:focus,
        form.wpcf7-form input[type="email"]:focus,
        form.wpcf7-form input[type="date"]:focus,
        form.wpcf7-form textarea:focus,
        form.wpcf7-form .fancy-select .trigger.open {
            -webkit-box-shadow: 0 0 0 2px #0e296e inset;
            box-shadow: 0 0 0 2px #0e296e inset;
        }

        form.wpcf7-form p span.required:after,
        form.wpcf7-form p span.bt_bb_required:after {
            color: #0e296e !important;
        }

        form.wpcf7-form .wpcf7-submit {
            background-color: #0e296e;
        }

        form.wpcf7-form .wpcf7-submit:hover {
            background: #05102a;
        }

        .fancy-select ul.options>li:hover {
            color: #0e296e;
        }

        .btBox .tagcloud a,
        .btTags ul a {
            background: #0e296e;
        }

        .btBox .tagcloud a:hover,
        .btTags ul a:hover {
            background: #05102a;
        }

        .recentTweets small:before {
            color: #0e296e;
        }

        .btContentHolder blockquote {
            font-family: Barlow;
        }

        .btContentHolder table tr th,
        .btContentHolder table thead tr th {
            background: #0e296e;
        }

        .post-password-form input[type="submit"] {
            background: #0e296e;
            font-family: Montserrat;
        }

        .btPagination .paging a:hover:after {
            background: #0e296e;
        }

        .articleSideGutter a {
            color: #0e296e;
        }

        .comment-respond .btnOutline button[type="submit"] {
            font-family: Montserrat;
        }

        a#cancel-comment-reply-link {
            font-family: Barlow;
        }

        a#cancel-comment-reply-link:hover {
            color: #0e296e;
        }

        span.btHighlight {
            background-color: #0e296e;
        }

        a.btContinueReading {
            background: #0e296e;
        }

        a.btContinueReading:hover {
            background: #05102a;
        }

        .btIco .btIcoHolder:before,
        .btIco .btIcoHolder:after {
            color: #0e296e;
        }

        .btDarkSkin .btTopToolsRight .btIconWidget:hover .btIco .btIcoHolder:before,
        .btDarkSkin .btTopToolsRight .btIconWidget:hover .btIco .btIcoHolder:after,
        .btLightSkin .btDarkSkin .btTopToolsRight .btIconWidget:hover .btIco .btIcoHolder:before,
        .btLightSkin .btDarkSkin .btTopToolsRight .btIconWidget:hover .btIco .btIcoHolder:after {
            color: #0e296e;
        }

        .btLightSkin .btTopToolsRight .btIconWidget:hover .btIco .btIcoHolder:before,
        .btLightSkin .btTopToolsRight .btIconWidget:hover .btIco .btIcoHolder:after,
        .btDarkSkin .btLightSkin .btTopToolsRight .btIconWidget:hover .btIco .btIcoHolder:before,
        .btDarkSkin .btLightSkin .btTopToolsRight .btIconWidget:hover .btIco .btIcoHolder:after {
            color: #0e296e;
        }

        .btIco.btIcoWhiteType .btIcoHolder em {
            color: #0e296e;
        }

        .btIco.btIcoFilledType.btIcoAccentColor .btIcoHolder em,
        .btIco.btIcoOutlineType.btIcoAccentColor:hover .btIcoHolder em {
            -webkit-box-shadow: 0 0 0 1em #0e296e inset;
            box-shadow: 0 0 0 1em #0e296e inset;
        }

        .btIco.btIcoFilledType.btIcoAccentColor:hover .btIcoHolder em,
        .btIco.btIcoOutlineType.btIcoAccentColor .btIcoHolder em {
            -webkit-box-shadow: 0 0 0 1px #0e296e inset;
            box-shadow: 0 0 0 1px #0e296e inset;
        }

        .btIco.btIcoFilledType.btIcoAccentColor:hover .btIcoHolder:before,
        .btIco.btIcoFilledType.btIcoAccentColor:hover .btIcoHolder:after,
        .btIco.btIcoOutlineType.btIcoAccentColor .btIcoHolder:before,
        .btIco.btIcoOutlineType.btIcoAccentColor .btIcoHolder:after {
            color: #0e296e;
        }

        .btIco.btIcoFilledType.btIcoAccentColor.btIcoBigSize:hover .btIcoHolder em,
        .btIco.btIcoOutlineType.btIcoAccentColor.btIcoBigSize .btIcoHolder em {
            -webkit-box-shadow: 0 0 0 2px #0e296e inset;
            box-shadow: 0 0 0 2px #0e296e inset;
        }

        .btIco.btIcoFilledType.btIcoAlterColor .btIcoHolder em,
        .btIco.btIcoOutlineType.btIcoAlterColor:hover .btIcoHolder em {
            -webkit-box-shadow: 0 0 0 1em #0e296e inset;
            box-shadow: 0 0 0 1em #0e296e inset;
        }

        .btIco.btIcoFilledType.btIcoAlterColor:hover .btIcoHolder em,
        .btIco.btIcoOutlineType.btIcoAlterColor .btIcoHolder em {
            -webkit-box-shadow: 0 0 0 1px #0e296e inset;
            box-shadow: 0 0 0 1px #0e296e inset;
        }

        .btIco.btIcoFilledType.btIcoAlterColor:hover .btIcoHolder:before,
        .btIco.btIcoFilledType.btIcoAlterColor:hover .btIcoHolder:after,
        .btIco.btIcoOutlineType.btIcoAlterColor .btIcoHolder:before,
        .btIco.btIcoOutlineType.btIcoAlterColor .btIcoHolder:after {
            color: #0e296e;
        }

        .btIco.btIcoFilledType.btIcoAlterColor.btIcoBigSize:hover .btIcoHolder em,
        .btIco.btIcoOutlineType.btIcoAlterColor.btIcoBigSize .btIcoHolder em {
            -webkit-box-shadow: 0 0 0 2px #0e296e inset;
            box-shadow: 0 0 0 2px #0e296e inset;
        }

        .btLightSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,
        .btLightSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:after,
        .btLightSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
        .btLightSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:after,
        .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,
        .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:after,
        .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
        .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:after,
        .btDarkSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,
        .btDarkSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:after,
        .btDarkSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
        .btDarkSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:after,
        .btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:before,
        .btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btIcoAccentColor .btIcoHolder:after,
        .btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
        .btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:after {
            color: #0e296e;
        }

        .btLightSkin .btIco.btIcoDefaultType.btIcoAlterColor .btIcoHolder:before,
        .btLightSkin .btIco.btIcoDefaultType.btIcoAlterColor .btIcoHolder:after,
        .btLightSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
        .btLightSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:after,
        .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btIcoAlterColor .btIcoHolder:before,
        .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btIcoAlterColor .btIcoHolder:after,
        .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
        .btDarkSkin .btLightSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:after,
        .btDarkSkin .btIco.btIcoDefaultType.btIcoAlterColor .btIcoHolder:before,
        .btDarkSkin .btIco.btIcoDefaultType.btIcoAlterColor .btIcoHolder:after,
        .btDarkSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
        .btDarkSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:after,
        .btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btIcoAlterColor .btIcoHolder:before,
        .btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btIcoAlterColor .btIcoHolder:after,
        .btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
        .btLightSkin .btDarkSkin .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:after {
            color: #0e296e;
        }

        .btAccentColorBackground .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:before,
        .btAccentColorBackground .btIco.btIcoDefaultType.btIcoDefaultColor:hover .btIcoHolder:after {
            color: #0e296e !important;
        }

        .btIcoAccentColor span {
            color: #0e296e;
        }

        .btIcoAlterColor span {
            color: #0e296e;
        }

        .btIcoDefaultColor:hover span {
            color: #0e296e;
        }

        .btCircleIcon.btAccentColorCircle.btFilledCircle,
        .btCircleIcon.btAccentColorCircle.btFilledCircle:hover {
            border-color: #0e296e;
            background-color: #0e296e;
        }

        .btCircleIcon.btAccentColorCircle.btHollowCircle,
        .btCircleIcon.btAccentColorCircle.btHollowCircle:hover {
            border-color: #0e296e;
            color: #0e296e;
        }

        .btCircleIcon.btAlternateColorCircle.btFilledCircle,
        .btCircleIcon.btAlternateColorCircle.btFilledCircle:hover {
            border-color: #0e296e;
            background-color: #0e296e;
        }

        .btCircleIcon.btAlternateColorCircle.btHollowCircle,
        .btCircleIcon.btAlternateColorCircle.btHollowCircle:hover {
            border-color: #0e296e;
            color: #0e296e;
        }

        .btnFilledStyle.btnAccentColor,
        .btnOutlineStyle.btnAccentColor:hover {
            background-color: #0e296e;
            border: 2px solid #0e296e;
        }

        .btnFilledStyle.btnAlternateColor,
        .btnOutlineStyle.btnAlternateColor:hover {
            background-color: #0e296e;
            border: 2px solid #0e296e;
        }

        .btnFilledStyle.btnAccentColor:hover {
            background-color: #05102a;
            border: 2px solid #05102a;
        }

        .btnFilledStyle.btnAlternateColor:hover {
            background-color: #05102a;
            border: 2px solid #05102a;
        }

        .btnOutlineStyle.btnAccentColor {
            border: 2px solid #0e296e;
            color: #0e296e;
        }

        .btnOutlineStyle.btnAccentColor span,
        .btnOutlineStyle.btnAccentColor span:before,
        .btnOutlineStyle.btnAccentColor a,
        .btnOutlineStyle.btnAccentColor .btIco a:before,
        .btnOutlineStyle.btnAccentColor button {
            color: #0e296e !important;
        }

        .btnOutlineStyle.btnAlternateColor {
            border: 2px solid #0e296e;
            color: #0e296e;
        }

        .btnOutlineStyle.btnAlternateColor span,
        .btnOutlineStyle.btnAlternateColor span:before,
        .btnOutlineStyle.btnAlternateColor a,
        .btnOutlineStyle.btnAlternateColor .btIco a:before,
        .btnOutlineStyle.btnAlternateColor button {
            color: #0e296e !important;
        }

        .btnBorderlessStyle.btnAccentColor span,
        .btnBorderlessStyle.btnNormalColor:hover span,
        .btnBorderlessStyle.btnAccentColor span:before,
        .btnBorderlessStyle.btnNormalColor:hover span:before,
        .btnBorderlessStyle.btnAccentColor a,
        .btnBorderlessStyle.btnNormalColor:hover a,
        .btnBorderlessStyle.btnAccentColor .btIco a:before,
        .btnBorderlessStyle.btnNormalColor:hover .btIco a:before,
        .btnBorderlessStyle.btnAccentColor button,
        .btnBorderlessStyle.btnNormalColor:hover button {
            color: #0e296e;
        }

        .btnBorderlessStyle.btnAlternateColor span,
        .btnBorderlessStyle.btnAlternateColor span:before,
        .btnBorderlessStyle.btnAlternateColor a,
        .btnBorderlessStyle.btnAlternateColor .btIco a:before,
        .btnBorderlessStyle.btnAlternateColor button {
            color: #0e296e;
        }

        .btCounterHolder {
            font-family: Montserrat;
        }

        .btProgressContent .btProgressAnim {
            background-color: #0e296e;
        }

        .btProgressBarLineStyle .btProgressContent .btProgressAnim {
            color: #0e296e;
            border-bottom: 4px solid #0e296e;
        }

        .captionTxt:before {
            color: #0e296e;
        }

        .btPriceTable .btPriceTableHeader {
            background: #0e296e;
        }

        .btLightSkin .btDarkSkin .btPriceTableSticker,
        .btDarkSkin .btLightSkin .btDarkSkin .btPriceTableSticker {
            background: #0e296e;
        }

        .btDarkSkin .btDarkSkin .btPriceTableSticker,
        .btLightSkin .btDarkSkin .btDarkSkin .btPriceTableSticker {
            color: #0e296e;
        }

        .header .btSuperTitle {
            font-family: Barlow Condensed;
        }

        .header .btSubTitle {
            font-family: Barlow;
        }

        .btLightSkin .btAlternateDash.btDash .dash:after,
        .btLightSkin .btAlternateDash.btDash .dash:before,
        .btDarkSkin .btLightSkin .btAlternateDash.btDash .dash:after,
        .btDarkSkin .btLightSkin .btAlternateDash.btDash .dash:before,
        .btDarkSkin .btAlternateDash.btDash .dash:after,
        .btDarkSkin .btAlternateDash.btDash .dash:before,
        .btLightSkin .btDarkSkin .btAlternateDash.btDash .dash:after,
        .btLightSkin .btDarkSkin .btAlternateDash.btDash .dash:before {
            -webkit-box-shadow: 0 2px 0 0 #0e296e inset;
            box-shadow: 0 2px 0 0 #0e296e inset;
        }

        .btLightSkin .btAccentDash.btDash .dash:after,
        .btLightSkin .btAccentDash.btDash .dash:before,
        .btDarkSkin .btLightSkin .btAccentDash.btDash .dash:after,
        .btDarkSkin .btLightSkin .btAccentDash.btDash .dash:before,
        .btDarkSkin .btAccentDash.btDash .dash:after,
        .btDarkSkin .btAccentDash.btDash .dash:before,
        .btLightSkin .btDarkSkin .btAccentDash.btDash .dash:after,
        .btLightSkin .btDarkSkin .btAccentDash.btDash .dash:before {
            -webkit-box-shadow: 0 2px 0 0 #0e296e inset;
            box-shadow: 0 2px 0 0 #0e296e inset;
        }

        .header.small .dash:after,
        .header.small .dash:before {
            -webkit-box-shadow: 0 1px 0 0 #0e296e inset;
            box-shadow: 0 1px 0 0 #0e296e inset;
        }

        .btGridContent .header .btSuperTitle a:hover {
            color: #0e296e;
        }

        .btCatFilter {
            font-family: Barlow;
        }

        .btCatFilter .btCatFilterItem:after {
            background: #0e296e;
        }

        .btCatFilter .btCatFilterItem:hover {
            color: #0e296e;
        }

        .btMediaBox.btQuote,
        .btMediaBox.btLink {
            background-color: #0e296e;
        }

        h4.nbs.nsPrev a:hover:before,
        h4.nbs.nsNext a:hover:after {
            background-color: #0e296e;
        }

        .btGhost h4.nbs.nsPrev a:hover:before,
        .btGhost h4.nbs.nsNext a:hover:after {
            background-color: #0e296e !important;
        }

        .slided .slick-dots li.slick-active button,
        .slided .slick-dots li.slick-active button:hover,
        .btDarkSkin .slided .slick-dots li.slick-active button,
        .btLightSkin .btDarkSkin .slided .slick-dots li.slick-active button,
        .btDarkSkin .slided .slick-dots li.slick-active button:hover,
        .btLightSkin .btDarkSkin .slided .slick-dots li.slick-active button:hover {
            background-color: #0e296e;
        }

        .btGetInfo {
            background: #0e296e;
        }

        .btCloseGhost .btIco .btIcoHolder:after {
            color: #0e296e;
        }

        .btInfoBarMeta p strong {
            color: #0e296e;
        }

        .btLightSkin .tabsHeader li.on span,
        .btDarkSkin .btLightSkin .tabsHeader li.on span,
        .btLightSkin .tabsHeader li.on a,
        .btDarkSkin .btLightSkin .tabsHeader li.on a {
            -webkit-box-shadow: 0 -2px 0 0 #0e296e inset;
            box-shadow: 0 -2px 0 0 #0e296e inset;
        }

        .btLightSkin .tabsVertical .tabAccordionTitle.on,
        .btDarkSkin .btLightSkin .tabsVertical .tabAccordionTitle.on,
        .btDarkSkin .tabsVertical .tabAccordionTitle.on,
        .btLightSkin .btDarkSkin .tabsVertical .tabAccordionTitle.on {
            background-color: #0e296e;
            -webkit-box-shadow: -52px 0 0 #05102a inset;
            box-shadow: -52px 0 0 #05102a inset;
        }

        .tabsVertical .tabAccordionTitle:before {
            color: #0e296e;
        }

        .tabAccordionTitle.on {
            background: #0e296e;
        }

        .btSingleLatestPostFooter a.btArticleComments {
            border-left: 1px solid #0e296e;
        }

        .demos span {
            background-color: #0e296e;
        }

        .btWorkingHoursInnerLink a {
            background-color: #0e296e;
        }

        .btWorkingHoursInnerLink a:hover {
            background-color: #0e296e;
        }

        .btDarkSkin .btGoogleMapsWrap,
        .btLightSkin .btDarkSkin .btGoogleMapsWrap {
            background-color: #0e296e;
        }

        span.btInfoPaneToggler {
            background-color: #0e296e;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="date"],
        input[type="tel"],
        textarea,
        .fancy-select .trigger,
        .select2-container .select2-choice {
            font-family: Barlow;
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        textarea:focus,
        .fancy-select .trigger.open,
        .select2-container.select2-dropdown-open .select2-choice {
            -webkit-box-shadow: 0 0 0 2px #0e296e inset;
            box-shadow: 0 0 0 2px #0e296e inset;
        }

        .btSpecTypeDropdown .fancy-select .trigger.open {
            -webkit-box-shadow: 0 0 0 2px #0e296e inset;
            box-shadow: 0 0 0 2px #0e296e inset;
        }

        .wCheckBox:before {
            background-color: #0e296e;
        }

        .btCustomList li a:before {
            color: #0e296e;
        }

        .btCustomList li a:hover:before {
            background-color: #0e296e;
        }

        .btLightSkin .btCustomList li a:hover,
        .btDarkSkin .btLightSkin .btCustomList li a:hover,
        .btDarkSkin .btCustomList li a:hover,
        .btLightSkin .btDarkSkin .btCustomList li a:hover {
            background-color: #0e296e;
        }

        .btLightSkin .btCustomList li a:hover:before,
        .btDarkSkin .btLightSkin .btCustomList li a:hover:before,
        .btDarkSkin .btCustomList li a:hover:before,
        .btLightSkin .btDarkSkin .btCustomList li a:hover:before {
            background-color: #05102a;
        }

        div.wpcf7-validation-errors {
            border-color: #0e296e;
            color: #0e296e;
        }

        .ui-datepicker.ui-widget,
        .btDatePicker#ui-datepicker-div {
            font-family: Barlow;
        }

        .ui-datepicker.ui-widget .ui-datepicker-header {
            background: #0e296e;
        }

        .ui-datepicker.ui-widget tbody tr td a.ui-state-default.ui-state-active {
            -webkit-box-shadow: 0 0 0 20px #0e296e inset;
            box-shadow: 0 0 0 20px #0e296e inset;
        }

        .ui-datepicker.ui-widget tbody tr td a.ui-state-default.ui-state-highlight {
            -webkit-box-shadow: 0 0 0 20px #0e296e inset;
            box-shadow: 0 0 0 20px #0e296e inset;
        }

        .ui-datepicker.ui-widget tbody tr td a.ui-state-default.ui-state-hover {
            -webkit-box-shadow: 0 0 0 2px #0e296e inset;
            box-shadow: 0 0 0 2px #0e296e inset;
            color: #0e296e;
        }

        .slick-dots li.slick-active button,
        .slick-dots li.slick-active button:hover {
            background-color: #0e296e !important;
        }

        button.slick-arrow {
            background: #0e296e;
        }

        button.slick-arrow:hover {
            background-color: #0e296e;
        }

        .btLightSkin button.slick-arrow:hover,
        .btDarkSkin .btLightSkin button.slick-arrow:hover,
        .btDarkSkin button.slick-arrow:hover,
        .btLightSkin .btDarkSkin button.slick-arrow:hover {
            background-color: #0e296e;
        }

        .bt_bb_arrows_size_large button.slick-arrow:after {
            -webkit-box-shadow: 0 0 0 1px #0e296e inset;
            box-shadow: 0 0 0 1px #0e296e inset;
        }

        .bt_bb_arrows_size_large button.slick-arrow:hover:after {
            -webkit-box-shadow: 0 0 0 1em #0e296e inset;
            box-shadow: 0 0 0 1em #0e296e inset;
        }

        .bt_bb_color_scheme_2 .bt_bb_arrows_size_large button.slick-arrow:hover:before,
        .bt_bb_color_scheme_5 .bt_bb_arrows_size_large button.slick-arrow:hover:before {
            color: #0e296e;
        }

        .wpcf7-form input:not([type='checkbox']):not([type='radio']).wpcf7-submit {
            font-family: Barlow;
            background: #0e296e;
        }

        .wpcf7-form input:not([type='checkbox']):not([type='radio']).wpcf7-submit:hover {
            background: #05102a !important;
        }

        .wpcf7-form .btAlterSubmit input:not([type='checkbox']):not([type='radio']).wpcf7-submit {
            background: #0e296e;
        }

        .wpcf7-form .btAlterSubmit input:not([type='checkbox']):not([type='radio']).wpcf7-submit:hover {
            background: #05102a !important;
        }

        div.wpcf7 .btSubscribe input[type='submit'] {
            background: #0e296e !important;
        }

        div.wpcf7 .btFooterSubscribe input[type='submit'] {
            background: #0e296e !important;
        }

        div.wpcf7 .btFooterSubscribe input[type='submit']:hover {
            background: #05102a;
        }

        .bt_bb_progress_bar_advanced>p {
            font-family: Montserrat;
        }

        .btLightSkin .bt_bb_features_table table thead tr th,
        .btDarkSkin .btLightSkin .bt_bb_features_table table thead tr th {
            border-bottom-color: #0e296e;
        }

        .btDarkSkin .bt_bb_features_table table thead tr th,
        .btLightSkin .btDarkSkin .bt_bb_features_table table thead tr th {
            border-bottom-color: #0e296e;
        }

        .bt_bb_features_table table tbody tr td .bt_bb_features_table_yes:after {
            color: #0e296e;
        }

        .bt_bb_masonry_image_grid .bt_bb_grid_item .bt_bb_grid_item_inner_image:after {
            color: #0e296e;
        }

        .bt_bb_post_grid_loader {
            border-right: 2px solid #0e296e;
        }

        .bt_bb_post_grid_filter {
            font-family: Barlow;
        }

        .bt_bb_post_grid_filter .bt_bb_post_grid_filter_item:after {
            background: #0e296e;
        }

        .bt_bb_post_grid_filter .bt_bb_post_grid_filter_item:hover {
            color: #0e296e;
        }

        .bt_bb_masonry_portfolio_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_category {
            font-family: Barlow Condensed;
        }

        .bt_bb_masonry_portfolio_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title a {
            color: #0e296e;
        }

        .bt_bb_masonry_portfolio_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title:before {
            background: #0e296e;
        }

        .bt_bb_masonry_portfolio_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_meta {
            font-family: Barlow;
        }

        .bt_bb_masonry_portfolio_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_post_share .btIco:hover .btIcoHolder:after {
            color: #0e296e;
        }

        .bt_bb_masonry_portfolio_tiles .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_inner_content .bt_bb_grid_item_post_title:before {
            color: #0e296e;
        }

        .bt_bb_masonry_portfolio_tiles .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_inner_content .bt_bb_grid_item_post_title+.bt_bb_grid_item_post_excerpt:before {
            background: #0e296e;
        }

        .bt_bb_twitter .bt_bb_twitter_item a {
            color: #0e296e;
        }

        .bt_bb_slider .slick-dots li.slick-active button,
        .bt_bb_slider .slick-dots li.slick-active button:hover,
        .btDarkSkin .bt_bb_slider .slick-dots li.slick-active button,
        .btLightSkin .btDarkSkin .bt_bb_slider .slick-dots li.slick-active button,
        .btDarkSkin .bt_bb_slider .slick-dots li.slick-active button:hover,
        .btLightSkin .btDarkSkin .bt_bb_slider .slick-dots li.slick-active button:hover {
            background-color: #0e296e;
        }

        .mfp-gallery button.mfp-close {
            color: #0e296e;
        }

        .mfp-gallery button.mfp-arrow:hover {
            background: #0e296e;
        }

        .btSidebar .btIconWidget .btIconWidgetContent .btIconWidgetTitle {
            font-family: Montserrat;
        }

        .btSidebar .btIconWidget.btSpecialHeaderIcon .btIconWidgetIcon .btIco .btIcoHolder:before,
        .btSidebar .btIconWidget.btSpecialHeaderIcon .btIconWidgetIcon .btIco .btIcoHolder:after {
            color: #0e296e;
        }

        .bt_bb_before_after_image .bt_bb_before_after_image-horizontal .bt_bb_before_after_image-handle:hover {
            background: #0e296e;
        }

        .bt_bb_before_after_image .bt_bb_before_after_image-container.active .bt_bb_before_after_image-handle {
            background: #0e296e;
        }

        .bt_bb_before_after_image .bt_bb_before_after_image_block {
            background: #0e296e;
        }

        .bt_bb_before_after_image .bt_bb_before_after_image_block .bt_bb_before_after_image_headline {
            font-family: Montserrat;
        }

        .bt_bb_before_after_image .bt_bb_before_after_image_block .bt_bb_before_after_image_headline:after {
            background: #0e296e;
        }

        .mptt-shortcode-wrapper .mptt-shortcode-table tbody .mptt-event-container {
            background-color: #0e296e;
        }

        .mptt-shortcode-wrapper .mptt-shortcode-table tbody .mptt-event-container:hover {
            background-color: #0e296e;
        }

        .btAnimNav li.btAnimNavNext:hover,
        .btAnimNav li.btAnimNavPrev:hover {
            color: #0e296e;
        }

        .headline strong.animate {
            color: #0e296e;
        }

        .headline b.animate {
            color: #0e296e;
        }

        p.demo_store {
            background-color: #0e296e;
        }

        .woocommerce .woocommerce-error,
        .woocommerce .woocommerce-info,
        .woocommerce .woocommerce-message {
            border-top: 2px solid #0e296e;
        }

        .woocommerce .woocommerce-info a:not(.button),
        .woocommerce .woocommerce-message a:not(.button) {
            color: #0e296e;
        }

        .woocommerce .woocommerce-message {
            border-top-color: #0e296e;
        }

        .woocommerce .woocommerce-message:before {
            color: #0e296e;
        }

        .woocommerce .woocommerce-info {
            border-top-color: #0e296e;
        }

        .woocommerce .woocommerce-info:before {
            color: #0e296e;
        }

        .woocommerce div.product .stock {
            color: #0e296e;
        }

        nav.woocommerce-pagination ul li a:focus,
        nav.woocommerce-pagination ul li a:hover {
            background: #0e296e;
        }

        nav.woocommerce-pagination ul li a.next,
        nav.woocommerce-pagination ul li a.prev {
            background: #0e296e;
        }

        nav.woocommerce-pagination ul li a.next:hover,
        nav.woocommerce-pagination ul li a.prev:hover {
            background: #0e296e;
        }

        .woocommerce #respond input#submit,
        .woocommerce button.button.single_add_to_cart_button,
        .woocommerce .button.single_add_to_cart_button,
        .woocommerce input.button,
        .woocommerce button.button,
        .woocommerce .widget_price_filter .price_slider_amount .button,
        .woocommerce p.buttons a.button,
        .woocommerce .woocommerce-message a.button,
        button[name="calc_shipping"] {
            color: #0e296e;
            border: 2px solid #0e296e;
        }

        .woocommerce #respond input#submit:hover,
        .woocommerce a.button:hover,
        .woocommerce button.button:hover,
        .woocommerce input.button:hover,
        .woocommerce p.buttons a.button:hover,
        .widget_price_filter .price_slider_amount .button:hover {
            background-color: #0e296e;
        }

        .woocommerce .woocommerce-message a.button,
        .woocommerce a.button.wc-forward,
        .woocommerce #review_form .form-submit input[type="submit"]#submit,
        .woocommerce .shop_table.cart td.actions input[type="submit"],
        .woocommerce .shop_table.cart td.actions button[type="submit"],
        .woocommerce .login input[type="submit"],
        .woocommerce input.button[name="register"],
        .woocommerce input.button[name="save_address"],
        .woocommerce p.buttons a.button {
            background-color: #0e296e;
        }

        .woocommerce .woocommerce-message a.button:hover,
        .woocommerce a.button.wc-forward:hover,
        .woocommerce #review_form .form-submit input[type="submit"]#submit:hover,
        .woocommerce .shop_table.cart td.actions input[type="submit"]:hover,
        .woocommerce .shop_table.cart td.actions button[type="submit"]:hover,
        .woocommerce .login input[type="submit"]:hover,
        .woocommerce input.button[name="register"]:hover,
        .woocommerce input.button[name="save_address"]:hover,
        .woocommerce p.buttons a.button:hover,
        button[name="calc_shipping"]:hover {
            background-color: #05102a;
            border-color: #05102a;
        }

        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt {
            background-color: #0e296e;
        }

        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover {
            color: #0e296e !important;
        }

        .woocommerce #respond input#submit.alt.disabled,
        .woocommerce #respond input#submit.alt.disabled:hover,
        .woocommerce #respond input#submit.alt:disabled,
        .woocommerce #respond input#submit.alt:disabled:hover,
        .woocommerce #respond input#submit.alt:disabled[disabled],
        .woocommerce #respond input#submit.alt:disabled[disabled]:hover,
        .woocommerce a.button.alt.disabled,
        .woocommerce a.button.alt.disabled:hover,
        .woocommerce a.button.alt:disabled,
        .woocommerce a.button.alt:disabled:hover,
        .woocommerce a.button.alt:disabled[disabled],
        .woocommerce a.button.alt:disabled[disabled]:hover,
        .woocommerce button.button.alt.disabled,
        .woocommerce button.button.alt.disabled:hover,
        .woocommerce button.button.alt:disabled,
        .woocommerce button.button.alt:disabled:hover,
        .woocommerce button.button.alt:disabled[disabled],
        .woocommerce button.button.alt:disabled[disabled]:hover,
        .woocommerce input.button.alt.disabled,
        .woocommerce input.button.alt.disabled:hover,
        .woocommerce input.button.alt:disabled,
        .woocommerce input.button.alt:disabled:hover,
        .woocommerce input.button.alt:disabled[disabled],
        .woocommerce input.button.alt:disabled[disabled]:hover {
            background-color: #0e296e;
        }

        .woocommerce .star-rating span:before {
            color: #0e296e;
        }

        .woocommerce p.stars a[class^="star-"].active:after,
        .woocommerce p.stars a[class^="star-"]:hover:after {
            color: #0e296e;
        }

        .btLightSkin.woocommerce ul.cart_list li .headline a:hover,
        .btDarkSkin .btLightSkin.woocommerce ul.cart_list li .headline a:hover,
        .btLightSkin.woocommerce ul.product_list_widget li .headline a:hover,
        .btDarkSkin .btLightSkin.woocommerce ul.product_list_widget li .headline a:hover,
        .btDarkSkin.woocommerce ul.cart_list li .headline a:hover,
        .btLightSkin .btDarkSkin.woocommerce ul.cart_list li .headline a:hover,
        .btDarkSkin.woocommerce ul.product_list_widget li .headline a:hover,
        .btLightSkin .btDarkSkin.woocommerce ul.product_list_widget li .headline a:hover {
            color: #0e296e;
        }

        .btFooterWrap.btDarkSkin ul.cart_list li .headline a:hover,
        .btFooterWrap.btLightSkin ul.cart_list li .headline a:hover,
        .btFooterWrap.btDarkSkin ul.product_list_widget li .headline a:hover,
        .btFooterWrap.btLightSkin ul.product_list_widget li .headline a:hover {
            color: #0e296e !important;
        }

        .woocommerce .widget_shopping_cart .total,
        .woocommerce.widget_shopping_cart .total {
            border-top: 2px solid #0e296e;
        }

        .woocommerce .widget_shopping_cart .cart_list li a.remove:hover,
        .woocommerce.widget_shopping_cart .cart_list li a.remove:hover {
            background-color: #0e296e;
        }

        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
            background-color: #0e296e;
        }

        .woocommerce-cart .cart-collaterals .cart_totals .discount td {
            color: #0e296e;
        }

        .woocommerce .product_meta .posted_in:before {
            color: #0e296e;
        }

        .woocommerce .product_meta .posted_in a {
            color: #0e296e;
        }

        .woocommerce form.woocommerce-product-search input[type="submit"] {
            background-color: #0e296e;
        }

        td.product-remove a.remove {
            color: #0e296e;
            border: 1px solid #0e296e;
        }

        td.product-remove a.remove:hover {
            background-color: #0e296e;
        }

        .woocommerce .wc-proceed-to-checkout a.button {
            border: 2px solid #0e296e;
        }

        .woocommerce p.lost_password:before {
            color: #0e296e;
        }

        .woocommerce form.login p.lost_password a:hover {
            color: #0e296e;
        }

        .woocommerce header.title .edit {
            color: #0e296e;
        }

        .woocommerce .widget_layered_nav ul li.chosen a:hover:before,
        .woocommerce .widget_layered_nav_filters ul li a:hover:before {
            background-color: #0e296e;
        }

        a.reset_variations:hover {
            color: #0e296e;
        }

        .btLightSkin.woocommerce .product .headline a:hover,
        .btDarkSkin .btLightSkin.woocommerce .product .headline a:hover,
        .btDarkSkin.woocommerce .product .headline a:hover,
        .btLightSkin .btDarkSkin.woocommerce .product .headline a:hover {
            color: #0e296e;
        }

        .woocommerce a.button.wc-backward {
            background-color: #0e296e;
        }

        .woocommerce a.button.wc-backward:hover {
            background-color: #05102a;
        }

        .woocommerce-MyAccount-navigation ul {
            font-family: "Barlow";
        }

        .woocommerce-MyAccount-navigation ul li a:after {
            background: #0e296e;
        }

        .woocommerce-MyAccount-navigation ul li a:hover {
            color: #0e296e;
        }

        form fieldset legend {
            font-family: Montserrat;
        }

        .btQuoteBooking .btContactNext {
            background-color: #0e296e;
            border: 2px solid #0e296e;
        }

        .btQuoteBooking .btContactNext:hover,
        .btQuoteBooking .btContactNext:active {
            background-color: #05102a;
            border: 2px solid #05102a;
        }

        .btQuoteBooking .btQuoteSwitch:hover {
            -webkit-box-shadow: 0 0 0 #0e296e inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 #0e296e inset, 0 1px 5px rgba(0, 0, 0, .2);
        }

        .btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner {
            background: #0e296e;
        }

        .btQuoteBooking input[type="text"],
        .btQuoteBooking input[type="email"],
        .btQuoteBooking input[type="password"],
        .btQuoteBooking textarea,
        .btQuoteBooking .fancy-select .trigger,
        .btQuoteBooking .dd.ddcommon .ddTitleText {
            font-family: Barlow;
        }

        .btQuoteBooking input[type="text"]:focus,
        .btQuoteBooking input[type="email"]:focus,
        .btQuoteBooking input[type="password"]:focus,
        .btQuoteBooking textarea:focus,
        .btQuoteBooking .fancy-select .trigger.open,
        .btQuoteBooking .dd.ddcommon.borderRadiusTp .ddTitleText {
            -webkit-box-shadow: 0 0 0 2px #0e296e inset;
            box-shadow: 0 0 0 2px #0e296e inset;
        }

        .btQuoteBooking .btQuoteItem textarea {
            font-family: Barlow;
        }

        .btQuoteBooking .ui-slider .ui-slider-handle {
            background: #0e296e;
        }

        .btQuoteBooking .btQuoteBookingForm .btQuoteTotal {
            background: #0e296e;
        }

        .btQuoteBooking .btQuoteTotalCurrency {
            background: #05102a;
        }

        .btQuoteBooking .btQuoteTotalCalc {
            background: #05102a;
        }

        .btQuoteBooking .btContactFieldMandatory:after {
            color: #0e296e;
        }

        .btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
        .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea {
            border: 1px solid #0e296e;
            -webkit-box-shadow: 0 0 0 1px #0e296e inset;
            box-shadow: 0 0 0 1px #0e296e inset;
        }

        .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText {
            border: 1px solid #0e296e;
            -webkit-box-shadow: 0 0 0 1px #0e296e inset;
            box-shadow: 0 0 0 1px #0e296e inset;
        }

        .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius:hover .ddTitleText {
            -webkit-box-shadow: 0 0 0 1px #0e296e inset, 0 0 0 #0e296e inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 1px #0e296e inset, 0 0 0 #0e296e inset, 0 1px 5px rgba(0, 0, 0, .2);
        }

        .btQuoteBooking .btContactFieldMandatory.btContactFieldError input:focus,
        .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea:focus {
            -webkit-box-shadow: 0 0 0 1px #0e296e inset, 5px 0 0 #0e296e inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 1px #0e296e inset, 5px 0 0 #0e296e inset, 0 1px 5px rgba(0, 0, 0, .2);
        }

        .btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadiusTp .ddTitleText {
            -webkit-box-shadow: 0 0 0 1px #0e296e inset, 5px 0 0 #0e296e inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 1px #0e296e inset, 5px 0 0 #0e296e inset, 0 1px 5px rgba(0, 0, 0, .2);
        }

        .btQuoteBooking .btSubmitMessage {
            color: #0e296e;
        }

        .btDatePicker .ui-datepicker-header {
            background-color: #0e296e;
        }

        .btQuoteBooking .btContactSubmit {
            background-color: #0e296e;
            border: 2px solid #0e296e;
        }

        .btQuoteBooking .btContactSubmit:hover {
            background-color: #05102a;
            border: 2px solid #05102a;
        }

        .btPayPalButton:hover {
            -webkit-box-shadow: 0 0 0 #0e296e inset, 0 1px 5px rgba(0, 0, 0, .2);
            box-shadow: 0 0 0 #0e296e inset, 0 1px 5px rgba(0, 0, 0, .2);
        }

        @media (max-width:992px) {

            .header.small .dash:after,
            .header.small .dash:before {
                -webkit-box-shadow: 0 1px 0 0 #0e296e inset;
                box-shadow: 0 1px 0 0 #0e296e inset;
            }
        }

        @media (max-width:767px) {
            .btArticleListItem .btArticleFooter .btShareArticle:before {
                background-color: #0e296e;
            }
        }

        #menu {
            margin-left: 94px;
        }

        #menu ul {
            list-style: none;
            margin-top: 23px;
        }

        #menu ul li {
            display: inline;
            line-height: 0px;
        }

        #menu ul li a {
            padding: 2px 8px;
            display: inline-block;
            font-family: arial;
            margin-left: 30px;
        }

        #menu ul li a:hover {
            color: #0e296e;
            box-shadow: 0 35px #0e296e;
        }

        hr {
            background: linear-gradient(grey, white);
            height: 2px;
        }
    </style>

    <!-- Script para setar o hidden input para o codigo do correspondente produto -->
    <script>
        function validar() {
            switch (form1.produto.text) {
                case "corrimao":
                    form1.produto_codigo.text = 1;
                    break;

                case "escada":
                    form1.produto_codigo.text = 2;
                    break;

                case "todos":
                    form1.produto_codigo.text = 3;
                    break;
            }
        }
    </script>
    <!-- Fim do script -->

</head>

<body class="home page-template-default page page-id-1918 bodyPreloader btMenuLeftEnabled btStickyEnabled btLightSkin btNoDashInSidebar btTopToolsInMenuArea btMenuGutter btHardRoundedButtons btNoSidebar bt_bb_plugin_active bt_bb_fe_preview_toggle" data-autoplay="0" id="btBody" style="background-image:url(https://alpec.com.br/wp-content/uploads/2019/08/fundo-alpec-CINZA-1.jpg)">


    <div class="btPageWrap" id="top">
        <div class="row">
            <div class="port">
                <div class="logo">
                    <div id="menu">
                        <ul>
                            <a href="https://alpec.com.br/"><img class="btMainLogo" data-hw="3.7818181818182" src="https://alpec.com.br/wp-content/uploads/2019/07/logo.fw_.png" alt="Alpec"></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="btFooterWrap">
            <div class="boldCell">
                <div class="boldCellInner">
                    <div class="boldRow">
                        <div class="boldRowInner">
                            <div class="rowItem col-md-4 col-ms-12 inherit"></div>
                            <div class="btBox widget_text">
                                <div class="rowItem col-md-4 col-ms-12">
                                    <div class="rowItemContent">
                                        <header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
                                            <div class="w3-display-middle" style="width:40%">

                                                <div class="bar black">
                                                    <button class="w3-bar-item w3-button tablink w3-aqua" onclick="openLink(event, &#39;1&#39;);"><i class="fa w3-margin-right"></i>1</button>
                                                    <button class="w3-bar-item w3-button tablink" onclick="openLink(event, &#39;2&#39;);"><i class="fa w3-margin-right"></i>2</button>
                                                    <button class="w3-bar-item w3-button tablink" onclick="openLink(event, &#39;3&#39;);"><i class="fa w3-margin-right"></i>3</button>
                                                </div>

                                                <!-- Tabs -->
                                                <div id="1" class="container white padding-16 myLink" style="display: block;">
                                                    <?php if($listar && $cont <= 9) :
                                                        foreach ($listar as $produto) : ?>
                                                    <div class="col-md-4 text-center animate-box">
                                                        <div class="sermon-entry">
                                                            <div class="sermon" style="background-image: url(img/racao2.png);">
                                                            </div>
                                                            <h3><?php echo $produto->NOME; ?></h3>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <div class="col-md-4 text-center animate-box">
                                                            <h3>Nenhum produto encontrado</h3>
                                                        </div>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>

                                                <div id="2" class="container white padding-16 myLink" style="display: none;">
                                                    alo
                                                </div>

                                                <div id="3" class="container white padding-16 myLink" style="display: none;">
                                                    bom
                                                </div>

                                            </div>
                                        </header>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="boldSection gutter btSiteFooter btGutter">
        <div class="port">
            <div class="boldRow">
                <div class="rowItem btFooterCopy col-lg-4 btTextLeft"></div>
                <div class="rowItem btFooterCopy col-lg-4 btTextCenter">
                    <p class="copyLine"><strong>@Copyright by ALPEC. All rights reserved.</strong></p>
                </div><!-- /copy -->
                <div class="rowItem btFooterMenu col-lg-4 col-sm-12 btTextCenter">
                    <div class="fooWidgets">
                        <a href="http://www.facebook.com" target="_blank" class="btIconWidget ">
                            <span class="btIconWidgetIcon">
                                <span class="btIco ">
                                    <span data-ico-fa="&#xf09a;" class="btIcoHolder">
                                        <em></em>
                                    </span>
                                </span>
                            </span>
                        </a>
                        <a href="http://www.twitter.com" target="_blank" class="btIconWidget ">
                            <span class="btIconWidgetIcon">
                                <span class="btIco ">
                                    <span data-ico-fa="&#xf099;" class="btIcoHolder">
                                        <em></em>
                                    </span>
                                </span>
                            </span>
                        </a>
                        <a href="http://www.instagram.com" target="_blank" class="btIconWidget ">
                            <span class="btIconWidgetIcon">
                                <span class="btIco ">
                                    <span data-ico-fa="&#xf16d;" class="btIcoHolder">
                                        <em></em>
                                    </span>
                                </span>
                            </span>
                        </a>
                        <a href="http://plus.google.com" target="_blank" class="btIconWidget ">
                            <span class="btIconWidgetIcon">
                                <span class="btIco ">
                                    <span data-ico-fa="&#xf0d5;" class="btIcoHolder">
                                        <em></em>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div><!-- /boldRow -->
        </div><!-- /port -->
    </section>

    </div><!-- /pageWrap -->
    <script>
    // Tabs
    function openLink(evt, linkName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("myLink");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-aqua", "");
        }
        document.getElementById(linkName).style.display = "block";
        evt.currentTarget.className += " w3-aqua";
    }

    // Click on the first tablink on load
    document.getElementsByClassName("tablink")[0].click();
</script>

</body>
</html>