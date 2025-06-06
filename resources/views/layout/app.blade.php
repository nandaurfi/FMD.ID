<!DOCTYPE html>
<html>

<head>
    <title>FMD</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/admin/img/favicon.jpg') }}">

    <!--Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.min.css') }}" />

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/vendor.css') }}" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f2289c4a36.js" crossorigin="anonymous"></script>

    <!-- Style untuk Navbar dan Footer -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}" />

    <!-- CSS Alertify -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css"/>

    <!-- Stack Styles untuk halaman khusus -->
    @stack('styles')

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet" />
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
        <symbol id="wifi" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M6.55 12.192c3.017-3.256 7.883-3.256 10.9 0a.75.75 0 1 0 1.1-1.02c-3.61-3.896-9.49-3.896-13.1 0a.75.75 0 1 0 1.1 1.02" />
            <path fill="currentColor"
                d="M8.55 14.35c1.912-2.064 4.987-2.064 6.9 0a.75.75 0 1 0 1.1-1.019c-2.506-2.705-6.594-2.705-9.1 0a.75.75 0 1 0 1.1 1.02" />
            <path fill="currentColor"
                d="M10.55 16.51c.808-.872 2.092-.872 2.9 0a.75.75 0 1 0 1.1-1.02c-1.401-1.513-3.699-1.513-5.1 0a.75.75 0 1 0 1.1 1.02" />
            <path fill="currentColor" fill-rule="evenodd"
                d="M12 1.25c-.708 0-1.351.203-2.05.542c-.674.328-1.454.812-2.427 1.416L5.456 4.491c-.92.572-1.659 1.03-2.227 1.465c-.589.45-1.041.91-1.368 1.507c-.326.595-.472 1.229-.543 1.978c-.068.725-.068 1.613-.068 2.726v1.613c0 1.904 0 3.407.153 4.582c.156 1.205.486 2.178 1.23 2.947c.747.773 1.697 1.119 2.875 1.282c1.14.159 2.598.159 4.434.159h4.116c1.836 0 3.294 0 4.434-.159c1.177-.163 2.128-.509 2.876-1.282c.743-.769 1.073-1.742 1.23-2.947c.152-1.175.152-2.678.152-4.582v-1.613c0-1.113 0-2-.068-2.726c-.07-.75-.217-1.383-.543-1.978c-.327-.597-.78-1.056-1.368-1.507c-.568-.436-1.306-.893-2.227-1.465l-2.067-1.283c-.973-.604-1.753-1.088-2.428-1.416c-.697-.34-1.34-.542-2.049-.542M8.28 4.504c1.015-.63 1.73-1.072 2.327-1.363c.581-.283.993-.391 1.393-.391s.812.108 1.393.391c.598.29 1.312.733 2.327 1.363l2 1.241c.961.597 1.636 1.016 2.14 1.402c.489.375.77.684.963 1.036c.193.353.306.766.365 1.398c.061.648.062 1.465.062 2.623v1.521c0 1.97-.002 3.376-.14 4.443c-.136 1.048-.393 1.656-.82 2.099c-.425.439-1.003.7-2.004.839c-1.026.142-2.379.144-4.286.144h-4c-1.908 0-3.26-.002-4.286-.144c-1.001-.14-1.579-.4-2.003-.84c-.428-.442-.685-1.05-.82-2.098c-.14-1.067-.141-2.472-.141-4.443v-1.521c0-1.158 0-1.975.062-2.623c.059-.632.172-1.045.365-1.398c.193-.352.474-.661.964-1.036c.503-.386 1.178-.805 2.139-1.402z"
                clip-rule="evenodd" />
        </symbol>
        <symbol id="armchair" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd"
                d="M10.749 3.25h2.502c1.088 0 1.976 0 2.678.09c.73.093 1.37.296 1.885.786c.52.496.74 1.12.84 1.833c.096.675.096 1.527.096 2.557v1.057c.4-.21.857-.323 1.323-.323c1.708 0 3.17 1.557 2.53 3.277l-1.12 3l-.023.062c-.173.463-.291.78-.452 1.059c-.498.858-1.309 1.497-2.258 1.833V20a.75.75 0 0 1-1.5 0v-1.254c-.188.004-.4.004-.655.004H6.75V20a.75.75 0 0 1-1.5 0v-1.333a.75.75 0 0 1 .021-.179c-1.14-.398-2.086-1.231-2.527-2.354l-.04-.108l-1.306-3.5c-.642-1.719.82-3.276 2.529-3.276c.466 0 .922.113 1.323.323V8.516c0-1.03 0-1.882.095-2.557c.1-.713.32-1.337.84-1.833c.516-.49 1.156-.693 1.886-.786c.702-.09 1.59-.09 2.678-.09M5.25 11.928V12h.03l.86 2.122l.02.049c.08.196.162.4.289.577c.288.4.724.664 1.199.76c.207.043.427.042.666.042h7.139c.46.001.891.002 1.271-.155c.207-.085.399-.204.566-.355c.316-.286.476-.683.63-1.066l.037-.092l.764-1.882h.03v-.072l.207-.512c.147-.362.57-.666 1.115-.666c.92 0 1.314.743 1.124 1.252l-1.12 3c-.204.55-.278.74-.367.894c-.397.685-1.159 1.193-2.079 1.322c-.212.03-.458.032-1.098.032H6.776c-1.237-.018-2.265-.72-2.636-1.665a6.26 6.26 0 0 1-.034-.09l-1.303-3.493c-.19-.509.204-1.252 1.124-1.252c.546 0 .968.304 1.115.666zm12-.292V8.57c0-1.1-.002-1.845-.08-2.403c-.076-.532-.208-.782-.39-.955c-.188-.18-.465-.312-1.042-.385c-.595-.077-1.386-.078-2.538-.078h-2.4c-1.152 0-1.943.001-2.538.078c-.577.073-.854.206-1.042.385c-.182.173-.314.423-.39.955c-.078.558-.08 1.304-.08 2.403v3.065l.78 1.922c.053.13.083.203.108.259a.502.502 0 0 0 .028.055c.05.07.145.14.28.167c.04.007.095.011.422.011h6.979c.637 0 .738-.014.806-.042a.453.453 0 0 0 .131-.081c.002-.001.022-.017.069-.11a6.79 6.79 0 0 0 .214-.499z"
                clip-rule="evenodd" />
        </symbol>
        <symbol id="dumbbells" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd"
                d="m4.929 1.53l.049.007c.288.04.542.075.753.12c.224.048.452.118.67.252c.482.297.82.777.958 1.324c.069.274.05.636.03.906l-.024.257l4.657.648l.035-.228c.044-.266.112-.623.247-.874a2.103 2.103 0 0 1 1.263-1.034c.247-.071.486-.076.714-.06c.214.013.469.049.757.089l.048.007c.288.04.543.075.753.12c.225.048.452.117.67.251c.482.298.82.778.958 1.324c.061.243.066.48.052.715c-.012.224-.045.492-.083.804l-.35 2.885c-.037.311-.07.58-.111.8c-.043.23-.104.46-.223.681a2.103 2.103 0 0 1-1.263 1.035a2.043 2.043 0 0 1-.714.06c-.214-.014-.468-.05-.756-.09l-.05-.006c-.287-.04-.542-.076-.752-.12a2.071 2.071 0 0 1-.67-.252a2.172 2.172 0 0 1-.958-1.324c-.07-.275-.05-.636-.03-.907c.007-.082.014-.169.023-.257l-4.656-.648l-.036.229c-.044.266-.112.623-.246.873a2.103 2.103 0 0 1-1.264 1.035a2.044 2.044 0 0 1-.713.06c-.214-.014-.47-.05-.757-.09l-.049-.006c-.288-.04-.543-.075-.753-.12a2.072 2.072 0 0 1-.67-.252a2.173 2.173 0 0 1-.958-1.323a2.334 2.334 0 0 1-.052-.715c.013-.224.045-.492.083-.804l.35-2.885c.038-.312.07-.58.112-.8c.043-.23.104-.46.222-.681A2.103 2.103 0 0 1 3.458 1.5c.247-.071.486-.075.714-.06c.214.014.469.05.757.09m-.855 1.407a.63.63 0 0 0-.2.005a.604.604 0 0 0-.357.303a.878.878 0 0 0-.07.247c-.031.167-.058.388-.1.728l-.344 2.84c-.041.34-.068.56-.077.731a.85.85 0 0 0 .009.263a.674.674 0 0 0 .29.413a.648.648 0 0 0 .197.062c.15.032.35.06.67.105c.32.044.52.072.673.082a.63.63 0 0 0 .199-.005a.603.603 0 0 0 .354-.296c0-.002.012-.03.029-.097c.02-.08.042-.188.064-.32c.044-.265.083-.585.123-.92a.75.75 0 0 1 .848-.653l6.132.854a.75.75 0 0 1 .64.833c-.04.335-.078.654-.099.923a4.13 4.13 0 0 0-.015.328c0 .074.006.104.005.104a.673.673 0 0 0 .289.407a.647.647 0 0 0 .197.061c.15.033.35.06.67.105c.32.045.52.072.673.082a.63.63 0 0 0 .199-.005a.604.604 0 0 0 .358-.302a.874.874 0 0 0 .07-.247c.03-.168.058-.388.099-.728L15.944 6c.042-.34.068-.561.078-.732a.826.826 0 0 0-.01-.262a.674.674 0 0 0-.29-.413a.647.647 0 0 0-.197-.062c-.15-.032-.35-.06-.67-.105c-.32-.045-.52-.072-.672-.082a.63.63 0 0 0-.2.005a.603.603 0 0 0-.354.295c0 .003-.011.03-.028.097a4.13 4.13 0 0 0-.064.32a22.38 22.38 0 0 0-.124.92a.75.75 0 0 1-.848.653l-6.131-.853a.75.75 0 0 1-.641-.833c.04-.336.079-.655.1-.924c.01-.133.015-.243.014-.327c0-.074-.005-.104-.005-.105a.672.672 0 0 0-.288-.406a.648.648 0 0 0-.197-.062c-.15-.032-.35-.06-.67-.105a10.5 10.5 0 0 0-.673-.082m15.123 9.309c-.15.032-.345.087-.657.177c-.311.089-.506.145-.652.199a.672.672 0 0 0-.192.091a.706.706 0 0 0-.243.455s0 .03.009.105c.01.084.028.191.054.322c.054.264.132.574.213.901a.75.75 0 0 1-.52.903l-5.973 1.714a.75.75 0 0 1-.934-.539c-.082-.327-.16-.637-.236-.894a4.041 4.041 0 0 0-.103-.307a.73.73 0 0 0-.04-.09a.57.57 0 0 0-.375-.234a.627.627 0 0 0-.197.023c-.15.032-.346.087-.657.177c-.311.089-.507.145-.652.199a.67.67 0 0 0-.192.091a.707.707 0 0 0-.244.462a.901.901 0 0 0 .024.262c.03.167.083.382.166.713l.692 2.767c.083.331.137.546.189.707c.05.155.082.209.097.23a.572.572 0 0 0 .381.243c.01.001.054.006.198-.024c.15-.031.346-.087.657-.176c.311-.09.506-.146.652-.2a.672.672 0 0 0 .192-.091a.707.707 0 0 0 .243-.455s0-.03-.008-.105a4.093 4.093 0 0 0-.055-.322a22.309 22.309 0 0 0-.213-.9a.75.75 0 0 1 .52-.904l5.973-1.714a.75.75 0 0 1 .934.539c.082.327.16.637.236.894c.038.128.073.23.103.308c.024.06.038.086.04.09a.57.57 0 0 0 .375.234c.01.001.054.006.197-.024c.15-.031.346-.087.657-.176c.312-.09.507-.146.652-.2a.67.67 0 0 0 .193-.091a.707.707 0 0 0 .243-.462a.9.9 0 0 0-.023-.262a13.097 13.097 0 0 0-.167-.713l-.692-2.767a12.78 12.78 0 0 0-.189-.706a.854.854 0 0 0-.097-.231a.571.571 0 0 0-.381-.242a.631.631 0 0 0-.198.023m-.308-1.468a2.04 2.04 0 0 1 .715-.04a2.064 2.064 0 0 1 1.698 1.501c.068.212.133.474.21.777l.702 2.81c.076.304.142.566.182.786c.042.232.067.467.037.716a2.206 2.206 0 0 1-.78 1.437a2.1 2.1 0 0 1-.628.34c-.203.075-.45.146-.731.227l-.048.013c-.28.08-.528.152-.738.196a2.043 2.043 0 0 1-.716.041a2.07 2.07 0 0 1-1.39-.854c-.167-.231-.279-.578-.355-.835l-.06-.207l-4.54 1.303c.02.09.04.177.057.262c.054.265.117.621.082.902a2.206 2.206 0 0 1-.78 1.438a2.096 2.096 0 0 1-.628.34c-.202.075-.45.146-.73.227l-.048.013c-.28.08-.528.152-.739.196a2.043 2.043 0 0 1-.715.041a2.07 2.07 0 0 1-1.391-.854a2.275 2.275 0 0 1-.307-.648c-.068-.212-.133-.474-.21-.777l-.702-2.81c-.076-.304-.142-.566-.182-.786a2.335 2.335 0 0 1-.037-.715a2.206 2.206 0 0 1 .78-1.437c.197-.162.413-.262.628-.341c.203-.075.45-.146.732-.226l.047-.014c.28-.08.528-.152.738-.196a2.04 2.04 0 0 1 .716-.04a2.07 2.07 0 0 1 1.39.853c.167.232.279.579.355.835l.06.207l4.54-1.303c-.02-.09-.04-.177-.056-.261c-.055-.266-.118-.622-.083-.903a2.206 2.206 0 0 1 .78-1.437a2.1 2.1 0 0 1 .628-.341c.202-.075.45-.146.73-.226l.048-.014c.28-.08.529-.152.739-.196"
                clip-rule="evenodd" />
        </symbol>
        <symbol id="swimming" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd"
                d="M17 3.75a1.75 1.75 0 1 0 0 3.5a1.75 1.75 0 0 0 0-3.5M13.75 5.5a3.25 3.25 0 1 1 6.5 0a3.25 3.25 0 0 1-6.5 0m-5.31-.87a.671.671 0 0 0-1.013.881l.988 1.152a2.25 2.25 0 0 1-.551 3.394l-3.477 2.086a.75.75 0 1 1-.772-1.286L7.091 8.77a.75.75 0 0 0 .184-1.131l-.988-1.153a2.171 2.171 0 0 1 3.276-2.849l6.5 7.366a.75.75 0 1 1-1.125.992zm-3.87 8.236c.687-1.074 2.157-1.039 2.888-.104c.99 1.267 2.372 2.488 4.542 2.488c2.209 0 3.57-.979 4.505-2.23c.72-.961 2.286-1.119 3.04.024c.626.945 1.304 1.687 2.627 1.998a.75.75 0 1 1-.344 1.46c-1.852-.436-2.807-1.533-3.534-2.631a.28.28 0 0 0-.253-.128a.432.432 0 0 0-.335.176C16.54 15.48 14.76 16.75 12 16.75c-2.842 0-4.611-1.64-5.724-3.065a.304.304 0 0 0-.246-.125a.23.23 0 0 0-.196.114c-.74 1.156-1.695 2.365-3.662 2.828a.75.75 0 1 1-.344-1.46c1.401-.33 2.08-1.14 2.742-2.176m0 5c.687-1.074 2.157-1.039 2.888-.104c.99 1.267 2.372 2.488 4.542 2.488c2.209 0 3.57-.979 4.505-2.23c.72-.962 2.286-1.119 3.04.024c.626.945 1.304 1.687 2.627 1.998a.75.75 0 1 1-.344 1.46c-1.852-.436-2.807-1.533-3.534-2.631a.28.28 0 0 0-.253-.128a.432.432 0 0 0-.335.177C16.54 20.48 14.76 21.75 12 21.75c-2.842 0-4.611-1.64-5.724-3.065a.304.304 0 0 0-.246-.125a.23.23 0 0 0-.196.114c-.74 1.156-1.695 2.365-3.662 2.828a.75.75 0 1 1-.344-1.46c1.401-.33 2.08-1.14 2.742-2.176"
                clip-rule="evenodd" />
        </symbol>
        <symbol id="chef-hat" viewBox="0 0 24 24">
            <g fill="none">
                <path fill="currentColor"
                    d="M19 18h.75zM5 14.584h.75a.75.75 0 0 0-.45-.687zm14 0l-.3-.687a.75.75 0 0 0-.45.687zM15.75 7a.75.75 0 0 0 1.5 0zm-9 0a.75.75 0 0 0 1.5 0zM7 4.25A5.75 5.75 0 0 0 1.25 10h1.5A4.25 4.25 0 0 1 7 5.75zm10 1.5A4.25 4.25 0 0 1 21.25 10h1.5A5.75 5.75 0 0 0 17 4.25zm-2 15.5H9v1.5h6zm-6 0c-.964 0-1.612-.002-2.095-.067c-.461-.062-.659-.169-.789-.3l-1.06 1.062c.455.455 1.022.64 1.65.725c.606.082 1.372.08 2.294.08zM4.25 18c0 .922-.002 1.688.08 2.294c.084.628.27 1.195.725 1.65l1.061-1.06c-.13-.13-.237-.328-.3-.79c-.064-.482-.066-1.13-.066-2.094zm14 0c0 .964-.002 1.612-.067 2.095c-.062.461-.169.659-.3.789l1.062 1.06c.455-.455.64-1.022.725-1.65c.082-.606.08-1.372.08-2.294zM15 22.75c.922 0 1.688.002 2.294-.08c.628-.084 1.195-.27 1.65-.726l-1.06-1.06c-.13.13-.328.237-.79.3c-.482.064-1.13.066-2.094.066zm-8-17c.214 0 .423.016.628.046l.219-1.484A5.792 5.792 0 0 0 7 4.25zm5-4.5a5.252 5.252 0 0 0-4.973 3.563l1.42.482A3.752 3.752 0 0 1 12 2.75zM7.027 4.813A5.245 5.245 0 0 0 6.75 6.5h1.5c0-.423.07-.828.198-1.205zM17 4.25c-.287 0-.57.021-.847.062l.22 1.484A4.29 4.29 0 0 1 17 5.75zm-5-1.5a3.752 3.752 0 0 1 3.552 2.545l1.42-.482A5.252 5.252 0 0 0 12 1.25zm3.552 2.545c.128.377.198.782.198 1.205h1.5c0-.589-.097-1.156-.277-1.687zM5.75 18v-3.416h-1.5V18zm-.45-4.103A4.251 4.251 0 0 1 2.75 10h-1.5a5.751 5.751 0 0 0 3.45 5.271zm12.95.687V18h1.5v-3.416zm3-4.584a4.251 4.251 0 0 1-2.55 3.897l.6 1.374A5.751 5.751 0 0 0 22.75 10zm-5.5-3.5V7h1.5v-.5zm-9 0V7h1.5v-.5z" />
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M5 18h14" />
            </g>
        </symbol>
        <symbol id="meditation" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd"
                d="M12 2.75a1.75 1.75 0 1 0 0 3.5a1.75 1.75 0 0 0 0-3.5M8.75 4.5a3.25 3.25 0 1 1 6.5 0a3.25 3.25 0 0 1-6.5 0M12 9.77a5.9 5.9 0 0 0-.86.052l-.892.15c-2.013.339-3.498 2.102-3.498 4.178a3.25 3.25 0 0 1-1.43 2.696l-.1.069a3.43 3.43 0 0 1-.823.406l-1.157.39a.75.75 0 0 1-.48-1.422l1.159-.39c.163-.055.319-.132.462-.228l.102-.069a1.75 1.75 0 0 0 .767-1.452c0-2.797 2.003-5.195 4.748-5.657l.89-.15A7.273 7.273 0 0 1 12 8.271a7.255 7.255 0 0 1 1.112.072l.89.15c2.746.462 4.748 2.86 4.748 5.657c0 .586.29 1.13.768 1.452l.101.069c.144.096.3.173.463.228l1.158.39a.75.75 0 0 1-.48 1.422l-1.157-.39a3.429 3.429 0 0 1-.822-.406l-.101-.069a3.25 3.25 0 0 1-1.43-2.696c0-2.076-1.485-3.839-3.497-4.178l-.892-.15a5.886 5.886 0 0 0-.86-.051m-3.1 5.78a.75.75 0 1 1 1.2.9l-.924 1.233l-.022.029a4.531 4.531 0 0 1-.34.42a2.75 2.75 0 0 1-1.007.67c-.155.058-.316.098-.52.15l-.035.008l-1.794.449a.935.935 0 0 0 .227 1.841h.684c1.546 0 3.05-.501 4.287-1.429L12.55 18.4a.75.75 0 1 1 .9 1.2l-.904.678l.491.185c.534.2.775.29 1.017.366a9.252 9.252 0 0 0 2.243.407c.253.014.51.014 1.08.014h.939a.935.935 0 0 0 .226-1.841l-1.473-.369a96.02 96.02 0 0 0-.082-.02c-.476-.119-.851-.212-1.186-.406a2.73 2.73 0 0 1-.29-.192c-.308-.234-.54-.543-.833-.936l-.051-.067l-.727-.969a.75.75 0 1 1 1.2-.9l.727.969c.368.491.471.618.591.709c.042.031.086.06.132.087c.13.075.287.121.883.27l1.473.368a2.435 2.435 0 0 1-.59 4.797h-.963c-.539 0-.84 0-1.14-.017a10.753 10.753 0 0 1-2.607-.473c-.286-.09-.567-.195-1.072-.384l-1.432-.537a8.645 8.645 0 0 1-4.733 1.411h-.684a2.435 2.435 0 0 1-.59-4.797l1.793-.448c.255-.064.324-.082.384-.105c.173-.066.33-.17.458-.304c.044-.047.088-.102.246-.313z"
                clip-rule="evenodd" />
        </symbol>
        <symbol id="calendar" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M17 14a1 1 0 1 0 0-2a1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2a1 1 0 0 0 0 2m-4-5a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-6-3a1 1 0 1 0 0-2a1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2a1 1 0 0 0 0 2" />
            <path fill="currentColor" fill-rule="evenodd"
                d="M7 1.75a.75.75 0 0 1 .75.75v.763c.662-.013 1.391-.013 2.193-.013h4.113c.803 0 1.532 0 2.194.013V2.5a.75.75 0 0 1 1.5 0v.827c.26.02.506.045.739.076c1.172.158 2.121.49 2.87 1.238c.748.749 1.08 1.698 1.238 2.87c.153 1.14.153 2.595.153 4.433v2.112c0 1.838 0 3.294-.153 4.433c-.158 1.172-.49 2.121-1.238 2.87c-.749.748-1.698 1.08-2.87 1.238c-1.14.153-2.595.153-4.433.153H9.945c-1.838 0-3.294 0-4.433-.153c-1.172-.158-2.121-.49-2.87-1.238c-.748-.749-1.08-1.698-1.238-2.87c-.153-1.14-.153-2.595-.153-4.433v-2.112c0-1.838 0-3.294.153-4.433c.158-1.172.49-2.121 1.238-2.87c.749-.748 1.698-1.08 2.87-1.238c.233-.031.48-.056.739-.076V2.5A.75.75 0 0 1 7 1.75M5.71 4.89c-1.005.135-1.585.389-2.008.812c-.423.423-.677 1.003-.812 2.009c-.023.17-.042.35-.058.539h18.336c-.016-.19-.035-.369-.058-.54c-.135-1.005-.389-1.585-.812-2.008c-.423-.423-1.003-.677-2.009-.812c-1.027-.138-2.382-.14-4.289-.14h-4c-1.907 0-3.261.002-4.29.14M2.75 12c0-.854 0-1.597.013-2.25h18.474c.013.653.013 1.396.013 2.25v2c0 1.907-.002 3.262-.14 4.29c-.135 1.005-.389 1.585-.812 2.008c-.423.423-1.003.677-2.009.812c-1.027.138-2.382.14-4.289.14h-4c-1.907 0-3.261-.002-4.29-.14c-1.005-.135-1.585-.389-2.008-.812c-.423-.423-.677-1.003-.812-2.009c-.138-1.027-.14-2.382-.14-4.289z"
                clip-rule="evenodd" />
        </symbol>
        <symbol id="arrow-right" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd"
                d="M13.47 5.47a.75.75 0 0 1 1.06 0l6 6a.75.75 0 0 1 0 1.06l-6 6a.75.75 0 1 1-1.06-1.06l4.72-4.72H4a.75.75 0 0 1 0-1.5h14.19l-4.72-4.72a.75.75 0 0 1 0-1.06"
                clip-rule="evenodd" />
        </symbol>
        <symbol id="arrow-left" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd"
                d="M10.53 5.47a.75.75 0 0 1 0 1.06l-4.72 4.72H20a.75.75 0 0 1 0 1.5H5.81l4.72 4.72a.75.75 0 1 1-1.06 1.06l-6-6a.75.75 0 0 1 0-1.06l6-6a.75.75 0 0 1 1.06 0"
                clip-rule="evenodd" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="send" viewBox="0 0 24 24">
            <g fill="none">
                <path
                    d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                <path fill="currentColor"
                    d="m21.433 4.861l-6 15.5a1 1 0 0 1-1.624.362l-3.382-3.235l-2.074 2.073a.5.5 0 0 1-.853-.354v-4.519L2.309 9.723a1 1 0 0 1 .442-1.691l17.5-4.5a1 1 0 0 1 1.181 1.329ZM19 6.001L8.032 13.152l1.735 1.66L19 6Z" />
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="quote" viewBox="0 0 16 16">
            <path fill="currentColor"
                d="M7 7v7H0V6.9c0-4.8 4.5-5.4 4.5-5.4l.6 1.4s-2 .3-2.4 1.9C2.3 6 3.1 7 3.1 7zm9 0v7H9V6.9c0-4.8 4.5-5.4 4.5-5.4l.6 1.4s-2 .3-2.4 1.9c-.4 1.2.4 2.2.4 2.2z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="play" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M9.5 15.584V8.416a.5.5 0 0 1 .77-.42l5.576 3.583a.5.5 0 0 1 0 .842l-5.576 3.584a.5.5 0 0 1-.77-.42Z" />
            <path fill="currentColor"
                d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12m11-9.5A9.5 9.5 0 0 0 2.5 12a9.5 9.5 0 0 0 9.5 9.5a9.5 9.5 0 0 0 9.5-9.5A9.5 9.5 0 0 0 12 2.5" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
            <path
                d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
        </symbol>
        <symbol id="location" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd"
                d="M3.25 10.143C3.25 5.244 7.155 1.25 12 1.25c4.845 0 8.75 3.994 8.75 8.893c0 2.365-.674 4.905-1.866 7.099c-1.19 2.191-2.928 4.095-5.103 5.112a4.2 4.2 0 0 1-3.562 0c-2.175-1.017-3.913-2.92-5.103-5.112c-1.192-2.194-1.866-4.734-1.866-7.099M12 2.75c-3.992 0-7.25 3.297-7.25 7.393c0 2.097.603 4.392 1.684 6.383c1.082 1.993 2.612 3.624 4.42 4.469a2.7 2.7 0 0 0 2.291 0c1.809-.845 3.339-2.476 4.421-4.469c1.081-1.99 1.684-4.286 1.684-6.383c0-4.096-3.258-7.393-7.25-7.393m0 5a2.25 2.25 0 1 0 0 4.5a2.25 2.25 0 0 0 0-4.5M8.25 10a3.75 3.75 0 1 1 7.5 0a3.75 3.75 0 0 1-7.5 0"
                clip-rule="evenodd" />
        </symbol>
        <symbol id="phone" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd"
                d="M6.007 3.407c1.68-1.68 4.516-1.552 5.686.544l.649 1.163c.763 1.368.438 3.095-.68 4.227a.63.63 0 0 0-.104.337c-.013.256.078.849.997 1.767c.918.918 1.51 1.01 1.767.997a.63.63 0 0 0 .337-.104c1.131-1.118 2.859-1.443 4.227-.68l1.163.65c2.096 1.17 2.224 4.004.544 5.685c-.899.898-2.093 1.697-3.498 1.75c-2.08.079-5.536-.459-8.958-3.88c-3.421-3.422-3.959-6.877-3.88-8.958c.053-1.405.852-2.6 1.75-3.498m4.376 1.275c-.6-1.074-2.21-1.32-3.315-.214c-.775.775-1.28 1.63-1.312 2.493c-.066 1.736.363 4.762 3.442 7.84c3.08 3.08 6.105 3.509 7.84 3.443c.863-.033 1.72-.537 2.494-1.312c1.106-1.106.86-2.716-.214-3.315l-1.163-.649c-.723-.403-1.74-.266-2.453.448c-.07.07-.516.486-1.307.524c-.81.04-1.791-.324-2.9-1.434c-1.111-1.11-1.475-2.091-1.435-2.902c.038-.791.455-1.237.524-1.307c.714-.713.851-1.729.448-2.452z"
                clip-rule="evenodd" />
        </symbol>
        <symbol id="email" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd"
                d="M9.944 3.25h4.112c1.838 0 3.294 0 4.433.153c1.172.158 2.121.49 2.87 1.238c.748.749 1.08 1.698 1.238 2.87c.153 1.14.153 2.595.153 4.433v.112c0 1.838 0 3.294-.153 4.433c-.158 1.172-.49 2.121-1.238 2.87c-.749.748-1.698 1.08-2.87 1.238c-1.14.153-2.595.153-4.433.153H9.944c-1.838 0-3.294 0-4.433-.153c-1.172-.158-2.121-.49-2.87-1.238c-.748-.749-1.08-1.698-1.238-2.87c-.153-1.14-.153-2.595-.153-4.433v-.112c0-1.838 0-3.294.153-4.433c.158-1.172.49-2.121 1.238-2.87c.749-.748 1.698-1.08 2.87-1.238c1.14-.153 2.595-.153 4.433-.153M5.71 4.89c-1.006.135-1.586.389-2.01.812c-.422.423-.676 1.003-.811 2.009c-.138 1.028-.14 2.382-.14 4.289c0 1.907.002 3.262.14 4.29c.135 1.005.389 1.585.812 2.008c.423.423 1.003.677 2.009.812c1.028.138 2.382.14 4.289.14h4c1.907 0 3.262-.002 4.29-.14c1.005-.135 1.585-.389 2.008-.812c.423-.423.677-1.003.812-2.009c.138-1.028.14-2.382.14-4.289c0-1.907-.002-3.261-.14-4.29c-.135-1.005-.389-1.585-.812-2.008c-.423-.423-1.003-.677-2.009-.812c-1.027-.138-2.382-.14-4.289-.14h-4c-1.907 0-3.261.002-4.29.14m-.287 2.63a.75.75 0 0 1 1.056-.096L8.64 9.223c.933.777 1.58 1.315 2.128 1.667c.529.34.888.455 1.233.455c.345 0 .704-.114 1.233-.455c.547-.352 1.195-.89 2.128-1.667l2.159-1.8a.75.75 0 1 1 .96 1.153l-2.196 1.83c-.887.74-1.605 1.338-2.24 1.746c-.66.425-1.303.693-2.044.693c-.741 0-1.384-.269-2.045-.693c-.634-.408-1.352-1.007-2.239-1.745L5.52 8.577a.75.75 0 0 1-.096-1.057"
                clip-rule="evenodd" />
        </symbol>
        <symbol id="clock" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd"
                d="M12 2.75a9.25 9.25 0 1 0 0 18.5a9.25 9.25 0 0 0 0-18.5M1.25 12C1.25 6.063 6.063 1.25 12 1.25S22.75 6.063 22.75 12S17.937 22.75 12 22.75S1.25 17.937 1.25 12M12 7.25a.75.75 0 0 1 .75.75v3.69l2.28 2.28a.75.75 0 1 1-1.06 1.06l-2.5-2.5a.75.75 0 0 1-.22-.53V8a.75.75 0 0 1 .75-.75"
                clip-rule="evenodd" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="star" viewBox="0 0 512 512">
            <path fill="currentColor"
                d="M394 480a16 16 0 0 1-9.39-3L256 383.76L127.39 477a16 16 0 0 1-24.55-18.08L153 310.35L23 221.2a16 16 0 0 1 9-29.2h160.38l48.4-148.95a16 16 0 0 1 30.44 0l48.4 149H480a16 16 0 0 1 9.05 29.2L359 310.35l50.13 148.53A16 16 0 0 1 394 480" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="play-circle" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="m9.5 16.5l7-4.5l-7-4.5zM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12q0-3.35-2.325-5.675T12 4Q8.65 4 6.325 6.325T4 12q0 3.35 2.325 5.675T12 20m0-8" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 32 32">
            <path fill="currentColor"
                d="M29.41 9.26a3.5 3.5 0 0 0-2.47-2.47C24.76 6.2 16 6.2 16 6.2s-8.76 0-10.94.59a3.5 3.5 0 0 0-2.47 2.47A36.13 36.13 0 0 0 2 16a36.13 36.13 0 0 0 .59 6.74a3.5 3.5 0 0 0 2.47 2.47c2.18.59 10.94.59 10.94.59s8.76 0 10.94-.59a3.5 3.5 0 0 0 2.47-2.47A36.13 36.13 0 0 0 30 16a36.13 36.13 0 0 0-.59-6.74ZM13.2 20.2v-8.4l7.27 4.2Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 256 256">
            <path fill="currentColor"
                d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="linkedin" viewBox="0 0 512 512">
            <path fill="currentColor"
                d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32Zm-273.3 373.43h-64.18V205.88h64.18ZM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43c0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43Zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44c-17.74 0-28.24 12-32.91 23.69c-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44c42.13 0 74 27.77 74 87.64Z" />
        </symbol>
        <symbol id="search" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd"
                d="M11.5 2.75a8.75 8.75 0 1 0 0 17.5a8.75 8.75 0 0 0 0-17.5M1.25 11.5c0-5.66 4.59-10.25 10.25-10.25S21.75 5.84 21.75 11.5c0 2.56-.939 4.902-2.491 6.698l3.271 3.272a.75.75 0 1 1-1.06 1.06l-3.272-3.271A10.21 10.21 0 0 1 11.5 21.75c-5.66 0-10.25-4.59-10.25-10.25"
                clip-rule="evenodd" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 16 16">
            <path
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 16 16">
            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
        </symbol>
    </svg>

    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-2" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-login modal-dialog-centered d-flex justify-content-center">
            <div class="modal-content rounded-4" style="width: 600px">
                <div class="modal-header px-4 mb-0 mt-2">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <img src="{{ url('assets/images/logo.png') }}" alt="">
                    </div>
                    <div class="mt-4 px-4">
                        <h5 class="fw-bold">Selamat Datang !!</h5>
                        <p style="color: #595959;">Silakan login untuk melanjutkan Berbelanja</p>
                        <form action="#">
                            <div class="mb-4 position-relative">
                                <input type="text" class="form-control rounded-3 py-2 custom-input" id="email" placeholder="Alamat Email" 
                                    onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';" 
                                    onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                    <label for="email" class="floating-label">Alamat Email</label>
                            </div>
                            <div class="mb-3 position-relative">
                                <input type="password" class="form-control rounded-3 py-2 custom-input" id="password" placeholder="Password" 
                                    onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';" 
                                    onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                    <label for="password" class="floating-label">Password</label>
                            </div>
                            <div class="text-end mb-3">
                                <a href="#" style="font-size: 12px; color: #66525E;">Lupa Kata Sandi?</a>
                            </div>
                            <a href="#" id="loginButton" class="btn btn-primary w-100 mb-4">Login</a>                     
                        </form>
                        <div class="text-center line-container px-5 mb-4">
                            <span class="line"></span>
                            <span class="text">atau</span>
                            <span class="line"></span>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <a href="#" class="d-flex justify-content-center border align-items-center rounded-5" style="width: 340px; height: 50px; border-color: #66525E !important;">
                                <img src="{{ url('assets/images/google.png') }}" alt="" class="me-4">
                                <p class="mb-0 mt-1">Lanjutkan dengan Google</p>
                            </a>
                        </div>
                        <div class="text-center">
                            <p style="color: #a7a7a7;">Belum punya akun? <span style="color: #66525E;"><a href="#" id="registerLink">Daftar Disini</a></span></p>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-2" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-login modal-dialog-centered d-flex justify-content-center">
            <div class="modal-content rounded-4" style="width: 600px">
                <div class="modal-header px-4 mb-0 mt-2">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <img src="{{ url('assets/images/logo.png') }}" alt="">
                    </div>
                    <div class="mt-4 px-4">
                        <h5 class="fw-bold">Daftar</h5>
                        <p style="color: #595959;">Buat akun untuk mulai menjelajah !</p>
                        <form action="#" id="registrationForm">
                            <div class="mb-4 position-relative">
                                <input type="text" class="form-control rounded-3 py-2 custom-input" id="username" placeholder="Username"
                                    onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';"
                                    onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                <label for="username" class="floating-label">Username</label>
                                <small class="text-danger error-message d-none">Username tidak boleh kosong</small>
                            </div>
                            <div class="mb-4 position-relative">
                                <input type="text" class="form-control rounded-3 py-2 custom-input" id="email" placeholder="Alamat Email"
                                    onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';"
                                    onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                <label for="email" class="floating-label">Alamat Email</label>
                                <small class="text-danger error-message d-none">Alamat Email tidak boleh kosong</small>
                            </div>
                            <div class="mb-3 position-relative">
                                <input type="password" class="form-control rounded-3 py-2 custom-input" id="password" placeholder="Password"
                                    onfocus="this.setAttribute('data-placeholder', this.placeholder); this.placeholder = '';"
                                    onblur="this.placeholder = this.getAttribute('data-placeholder');">
                                <label for="password" class="floating-label">Password</label>
                                <small class="text-danger error-message d-none">Password tidak boleh kosong</small>
                            </div>
                            <!-- Agreement Checkbox -->
                            <div class="agreement-container mt-3 mb-3">
                                <div class="d-flex agreement align-items-center">
                                    <input type="checkbox" class="custom-checkbox me-3" id="agreementCheckbox">
                                    <p class="mb-0">Dengan membuat akun, Anda harus menyetujui syarat & ketentuan kami</p>
                                </div>
                                <small class="text-danger error-message d-none">Anda harus menyetujui syarat & ketentuan</small>
                            </div>                                
                            <button type="button" id="registerButton" class="btn btn-primary w-100 mb-4">Daftar</button>
                        </form>
                        <div class="text-center line-container px-5 mb-4">
                            <span class="line"></span>
                            <span class="text">atau</span>
                            <span class="line"></span>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <a href="#" class="d-flex justify-content-center border align-items-center rounded-5" style="width: 340px; height: 50px; border-color: #66525E !important;">
                                <img src="{{ url('assets/images/google.png') }}" alt="" class="me-4">
                                <p class="mb-0 mt-1">Lanjutkan dengan Google</p>
                            </a>
                        </div>
                        <div class="text-center">
                            <p style="color: #a7a7a7;">Sudah punya akun? <span style="color: #66525E;"><a href="#" id="loginLink">Login Disini</a></span></p>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- OTP Modal -->
    <div class="modal fade" id="otpModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-otp modal-dialog-centered d-flex justify-content-center align-item-center">
            <div class="modal-content rounded-4">
                <div class="modal-header px-4 mb-0 mt-2">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="px-2 py-2" style="background-color: #D0C9CD; border-radius: 100%; width: fit-content;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 48 48" style="color: #66525E;">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M24 43.5c12.764-5.885 14.86-15.67 14.86-21.982V16.91S33.43 14.286 24 14.286S9.14 16.909 9.14 16.909v4.61c0 6.31 2.096 16.096 14.86 21.981"/>
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M32.013 14.96v-2.447a8.013 8.013 0 0 0-16.026 0v2.448m9.837 12.109a3.79 3.79 0 1 0-3.648 0a5.67 5.67 0 0 0-3.849 5.368h11.346a5.67 5.67 0 0 0-3.849-5.367"/>
                            </svg>
                        </div>
                        <h5 class="mt-3 fw-bold">Masukkan Kode OTP!</h5>
                        <p class="mt-1">Kode verifikasi telah dikirim melalui email Anda!</p>
                        <div class="otp-field mb-4">
                            <input type="number" maxlength="1" class="otp-input" />
                            <input type="number" maxlength="1" class="otp-input" disabled />
                            <input type="number" maxlength="1" class="otp-input" disabled />
                            <input type="number" maxlength="1" class="otp-input" disabled />
                            <input type="number" maxlength="1" class="otp-input" disabled />
                        </div>
                        <p class="mt-1" style="color: #8C8C8C;">Belum Menerima Kode OTP? <span style="color: #66525E;"><a href="#">Kirim Ulang</a></span></p>
                        <a href="{{ route('index-login') }}" class="btn btn-primary d-flex justify-content-center align-items-center mt-1 mb-2" style="width: 250px;">Verifikasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header id="header">
        <nav id="primary-header" class="navbar navbar-expand-lg py-4">
            <div class="container-fluid padding-side">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="d-flex align-items-center">
                        <!-- Navbar Icon Button (Visible Only on Smaller Screens, Left of Logo in Responsive Mode) -->
                        <button class="navbar-toggler border-0 d-flex d-lg-none order-1 p-2 shadow-none" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar"
                            aria-expanded="false">
                            <i class="fa-solid fa-bars"></i>
                        </button>

                        <!-- Logo (Right of Navbar Icon on Smaller Screens, Left Position on Larger Screens) -->
                        <a class="navbar-brand order-2 order-lg-1 ms-2" href="{{ route('index') }}">
                            <img src="{{ url('assets/images/logo.png') }}" class="logo img-fluid" />
                        </a>

                        <!-- Offcanvas Menu (Visible on Smaller Screens) -->
                        <div class="header-bottom offcanvas offcanvas-start order-lg-2" id="bdNavbar"
                            aria-labelledby="bdNavbarOffcanvasLabel">
                            <div class="offcanvas-header px-4 pb-0">
                                <button type="button" class="btn-close btn-close-black mt-2" data-bs-dismiss="offcanvas"
                                    aria-label="Close" data-bs-target="#bdNavbar"></button>
                            </div>
                            <div class="offcanvas-body align-items-center">
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <li class="nav-item px-3">
                                        <a class="nav-link p-0" aria-current="page" 
                                            href="{{ Request::route()->getName() === 'index-login' ? route('index-login') : 
                                            (Request::route()->getName() === 'detailproduct' || Request::route()->getName() === 'about-us' ||
                                                Request::route()->getName() === 'ktghijab' ? route('index-login') : route('index')) }}" 
                                            style="font-size: 14px;">
                                            <i class="fa-solid fa-house me-2 responsive-icon"></i>Beranda
                                        </a>
                                    </li>                                    
                                    <li class="nav-item px-3 dropdown">
                                        <a class="nav-link p-0" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-size: 14px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 1024 1024" class="me-2 responsive-icon">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M464 144c8.837 0 16 7.163 16 16v304c0 8.836-7.163 16-16 16H160c-8.837 0-16-7.164-16-16V160c0-8.837 7.163-16 16-16zm-52 68H212v200h200zm493.333
                                                    87.686c6.248 6.248 6.248 16.379 0 22.627l-181.02 181.02c-6.248 6.248-16.378 6.248-22.627 0l-181.019-181.02c-6.248-6.248-6.248-16.379 0-22.627l181.02-181.02c6.248-6.248
                                                    16.378-6.248 22.627 0zm-84.853 11.313L713 203.52L605.52 311L713 418.48zM464 544c8.837 0 16 7.164 16 16v304c0 8.837-7.163 16-16 16H160c-8.837 0-16-7.163-16-16V560c0-8.836
                                                    7.163-16 16-16zm-52 68H212v200h200zm452-68c8.837 0 16 7.164 16 16v304c0 8.837-7.163 16-16 16H560c-8.837 0-16-7.163-16-16V560c0-8.836 7.163-16 16-16zm-52 68H612v200h200z" />
                                            </svg>Produk Kami
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end animate slide mt-3 border-0 shadow">
                                            <li>
                                                <a href="{{ Request::route()->getName() === 'index-login' ? route('ktghijab') : 
                                                    (Request::route()->getName() === 'detailproduct' || Request::route()->getName() === 'about-us' ||
                                                        Request::route()->getName() === 'ktghijab' ? route('ktghijab') : route('bl-ktghijab')) }}" class="dropdown-item">
                                                    Hijab
                                                </a>
                                            </li>
                                            <li><a href="{{ route('ktgatasan') }}" class="dropdown-item">Atasan</a></li>
                                            <li><a href="{{ route('ktgmukenah') }}" class="dropdown-item">Mukenah</a></li>
                                            <li><a href="{{ route('ktgbawahan') }}" class="dropdown-item">Bawahan</a></li>
                                            <li><a href="{{ route('ktglainnya') }}" class="dropdown-item">Lainnya</a></li>
                                        </ul>
                                    </li>                                    
                                    <li class="nav-item px-3">
                                        <a class="nav-link p-0" href="{{ Request::route()->getName() === 'index-login' ? route('about-us') :
                                            (Request::route()->getName() === 'detailproduct' || Request::route()->getName() === 'ktghijab' ? route('about-us') : route('bl-about-us')) }}"                                    
                                            style="font-size: 14px;"><i
                                                class="fa-solid fa-circle-info me-2 responsive-icon"></i>Tentang
                                            Kami
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="search d-lg-block d-none me-4">
                            <form class="position-relative align-items-center">
                                <a href="#" class="position-absolute top-50 start-0 translate-middle-y p-1 ms-3">
                                    <i class="fa-solid fa-magnifying-glass" style="color: #667479;"></i>
                                </a>
                                <input type="text" class="form-control bg-secondary border-0 rounded-5 px-4 py-2 ps-5"
                                    placeholder="Search something here!" style="color: #99A2A5; width: 400px;" />
                            </form>
                        </div>
                        <div class="d-flex justify-content-center align-items-center d-lg-none me-3">
                            <a href="javascript:void(0)" id="search-icon-toggle" class="p-0">
                                <img src="{{ url('assets/images/searchicon.png') }}" alt="Search Icon">
                            </a>
                        </div>
                        @if (Route::is('index') || Route::is('bl-detailproduct') || Route::is('bl-about-us') || Route::is('bl-ktghijab'))
                            <a href="#" class="btn btn-primary d-flex align-items-center"
                                style="height: 42px; border-radius: 10px;" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Masuk
                            </a>
                        @else
                            <a href="{{ route('chat-customer') }}" class="me-3">
                                <img src="{{ url('assets/images/chaticon.png') }}" alt="" />
                            </a>
                            <div class="cart-dropdown">
                                <a href="#" class="me-3" id="cartIcon">
                                    <img src="{{ url('assets/images/carticon.png') }}" alt="Cart Icon" />
                                </a>
                                <div class="dropdown-content rounded-3 px-3 py-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0">Keranjang (5)</h6>
                                        <a href="{{ route('cart') }}" style="text-decoration: underline;">
                                            <p>Lihat Semua</p>
                                        </a>
                                    </div>
                                    <div class="item-cart d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center mt-2">
                                            <img class="rounded-2 me-2" src="{{ url('assets/images/cart1.png') }}" alt="">
                                            <div class="title-cart me-2">
                                                <h6 class="fw-bold">Hijab Paris Premium</h6>
                                                <p class="rounded-3 px-2">Warna : Beige</p>
                                            </div>
                                        </div>
                                        <p class="fw-semibold" style="color: #66525E;">Rp. 35.000</p>
                                    </div>
                                    <div class="item-cart d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center mt-2">
                                            <img class="rounded-2 me-2" src="{{ url('assets/images/cart1.png') }}" alt="">
                                            <div class="title-cart me-2">
                                                <h6 class="fw-bold">Hijab Paris Premium</h6>
                                                <p class="rounded-3 px-2">Warna : Beige</p>
                                            </div>
                                        </div>
                                        <p class="fw-semibold" style="color: #66525E;">Rp. 35.000</p>
                                    </div>
                                    <div class="item-cart d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center mt-2">
                                            <img class="rounded-2 me-2" src="{{ url('assets/images/cart1.png') }}" alt="">
                                            <div class="title-cart me-2">
                                                <h6 class="fw-bold">Hijab Paris Premium</h6>
                                                <p class="rounded-3 px-2">Warna : Beige</p>
                                            </div>
                                        </div>
                                        <p class="fw-semibold" style="color: #66525E;">Rp. 35.000</p>
                                    </div>
                                    <div class="item-cart d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center mt-2">
                                            <img class="rounded-2 me-2" src="{{ url('assets/images/cart2.png') }}" alt="">
                                            <div class="title-cart me-2">
                                                <h6 class="fw-bold">Serenade Strips</h6>
                                                <p class="rounded-3 px-2">Warna : Pink</p>
                                            </div>
                                        </div>
                                        <p class="fw-semibold" style="color: #66525E;">Rp. 35.000</p>
                                    </div>
                                    <div class="item-cart d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center mt-2">
                                            <img class="rounded-2 me-2" src="{{ url('assets/images/cart3.png') }}" alt="">
                                            <div class="title-cart me-2">
                                                <h6 class="fw-bold">Scuba Slim-Fit Pants</h6>
                                                <p class="rounded-3 px-2">Warna : Pink</p>
                                            </div>
                                        </div>
                                        <p class="fw-semibold" style="color: #66525E;">Rp. 35.000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-dropdown">
                                <a href="#" class="me-3" id="profileIcon">
                                    <img src="{{ url('assets/images/profileicon.png') }}" alt="Profile Icon" />
                                </a>
                                <div class="dropdown-profile px-3 py-3 rounded-3 border-0">
                                    <a href="{{ route('profilecustomer') }}"
                                        class="dropdown-item d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="me-3">
                                            <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                            <path d="M16 9a4 4 0 1 1-8 0a4 4 0 0 1 8 0m-2 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0"/><path d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11s11-4.925 11-11S18.075 
                                            1 12 1M3 12c0 2.09.713 4.014 1.908 5.542A8.99 8.99 0 0 1 12.065 14a8.98 8.98 0 0 1 7.092 3.458A9 9 0 1 0 3 12m9 9a8.96 8.96 0 0 1-5.672-2.012A6.99 6.99 
                                            0 0 1 12.065 16a6.99 6.99 0 0 1 5.689 2.92A8.96 8.96 0 0 1 12 21"/></g>
                                        </svg>
                                        <p class="mb-0 fw-semibold">Profil Saya</p>
                                    </a>
                                    <a href="{{ route('favorite') }}" class="dropdown-item d-flex align-items-center mt-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="me-3">
                                            <path fill="currentColor" d="m12 21l-1.45-1.3q-2.525-2.275-4.175-3.925T3.75 12.812T2.388 10.4T2 8.15Q2 5.8 3.575 4.225T7.5 2.65q1.3 0 2.475.55T12 4.75q.85-1 2.025-1.55t2.475-.55q2.35 
                                            0 3.925 1.575T22 8.15q0 1.15-.387 2.25t-1.363 2.412t-2.625 2.963T13.45 19.7z"/>
                                        </svg>
                                        <p class="mb-0 fw-semibold">Favorite Saya</p>
                                    </a>
                                    <a href="{{ route('order') }}" class="dropdown-item d-flex align-items-center mt-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48" class="me-3">
                                            <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4"><rect width="30" height="36" x="9" y="8" rx="2"/>
                                            <path stroke-linecap="round" d="M18 4v6m12-6v6m-14 9h16m-16 8h12m-12 8h8"/></g>
                                        </svg>
                                        <p class="mb-0 fw-semibold">Pesanan Saya</p>
                                    </a>
                                    <a href="{{ route('add-address') }}" class="dropdown-item d-flex align-items-center mt-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="me-3">
                                            <path fill="currentColor" d="M12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 
                                            12 6.5M12 2a7 7 0 0 1 7 7c0 5.25-7 13-7 13S5 14.25 5 9a7 7 0 0 1 7-7m0 2a5 5 0 0 0-5 5c0 1 0 3 5 9.71C17 12 17 10 17 9a5 5 0 0 0-5-5"/>
                                        </svg>
                                        <p class="mb-0 fw-semibold">Daftar Alamat</p>
                                    </a>
                                    <a href="{{ route('index') }}" class="dropdown-item d-flex align-items-center mt-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="me-3"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M14 8V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2"/><path d="M9 12h12l-3-3m0 6l3-3"/></g>
                                        </svg>
                                        <p class="mb-0 fw-semibold">Keluar</p>
                                    </a>
                                </div>
                            </div>
                        @endif
                        {{-- @if (!Route::is('index') || Route::is('bl-detailproduct') || Route::is('bl-about-us'))
                                
                            </div>
                        @endif --}}
                </div>
            </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <section id="footer" class="bg-secondary">
        <hr class="text-black mt-4" />
        <div class="container-fluid padding-side padding-small" data-aos="fade-up">
            <footer class="row mt-4 d-flex justify-content-center text-center text-md-start">
                <!-- Logo and Description -->
                <div class="col-12 col-sm-6 col-md-2 mb-4 mb-lg-0 text-start">
                    <img src="{{ url('assets/images/logo.png')}}" alt="Logo" />
                    <p class="mt-2">
                        Kami menghadirkan busana yang sesuai dengan gaya Anda dan membuat Anda bangga mengenakannya.
                        Dari busana
                        muslimah kasual hingga elegan, kami hadir untuk Anda.
                    </p>
                </div>
                <!-- Informasi Pelanggan -->
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-lg-0 text-start">
                    <h1 class="fw-bold" style="font-size: 14px">HELP CENTER:</h1>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="{{ url('/howtobuy') }}" class="p-0">How To Buy</a></li>
                        <li class="nav-item"><a href="{{ url('/faq') }}" class="p-0">FAQ</a></li>
                        <!-- Add Informasi items only for mobile view -->
                        <li class="nav-item mb-3 d-block d-md-none"><a href="{{ route('about-us') }}" class="p-0">Tentang Kami</a></li>
                        <li class="nav-item mb-3 d-block d-md-none"><a href="#" class="p-0">Privasi dan Kebijakan</a>
                        </li>
                    </ul>
                </div>

                <!-- Informasi (Only visible on desktop) -->
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-lg-0 d-none d-md-block">
                    <h1 class="fw-bold" style="font-size: 16px">INFORMASI:</h1>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="{{ route('about-us') }}" class="p-0">Tentang Kami</a></li>
                        <li class="nav-item"><a href="#" class="p-0">Privasi dan Kebijakan</a></li>
                    </ul>
                </div>
                <!-- Sosial Media Kami -->
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-lg-0 text-start">
                    <h1 class="fw-bold" style="font-size: 14px">SOSIAL MEDIA KAMI:</h1>
                    <ul class="nav flex-row flex-md-column mt-3">
                        <li
                            class="nav-item d-flex align-items-center justify-content-center justify-content-md-start mb-3">
                            <img src="{{ url('assets/images/whatsapp.png')}}" alt="WhatsApp" class="custom-icon me-4" />
                            <span class="phone-number ms-2 d-none d-md-block">085179982344</span>
                        </li>
                        <li
                            class="nav-item d-flex align-items-center justify-content-center justify-content-md-start mb-3">
                            <img src="{{ url('assets/images/tiktok.png')}}" alt="TikTok" class="custom-icon me-4" />
                            <span class="phone-number ms-2 d-none d-md-block">@fmd.id</span>
                        </li>
                        <li
                            class="nav-item d-flex align-items-center justify-content-center justify-content-md-start mb-3">
                            <img src="{{ url('assets/images/instagram.png')}}" alt="Instagram"
                                class="custom-icon me-4" />
                            <span class="phone-number ms-2 d-none d-md-block">@fmd.id</span>
                        </li>
                    </ul>
                </div>

                <!-- Pembayaran -->
                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-lg-0 text-start">
                    <h1 class="fw-bold" style="font-size: 14px">PEMBAYARAN</h1>
                    <ul class="nav flex-row flex-md-column mt-3">
                        <li
                            class="nav-item d-flex align-items-center justify-content-center justify-content-md-start mb-3">
                            <img src="{{ url('assets/images/mandiri.png')}}" alt="Mandiri" class="me-3" />
                            <img src="{{ url('assets/images/bri.png')}}" alt="BRI" />
                        </li>
                        <li
                            class="nav-item d-flex align-items-center justify-content-center justify-content-md-start mb-3">
                            <img src="{{ url('assets/images/bca.png')}}" alt="BCA" class="me-3" />
                            <img src="{{ url('assets/images/bni.png')}}" alt="BNI" />
                        </li>
                    </ul>
                </div>

            </footer>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
    <script src="{{ url('assets/js/jquery-1.11.0.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/plugins.js')}}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ url('https://unpkg.com/aos@2.3.1/dist/aos.js')}}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/js/script.js')}}"></script>
    <script src="{{ url('https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js')}}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Select the button and add a click event listener
            document.getElementById('uploadButton').addEventListener('click', function (event) {
                event.preventDefault(); // Prevent the default anchor behavior

                // Create the file input element
                const fileInput = document.createElement('input');
                fileInput.type = 'file';
                fileInput.accept = 'image/*'; // Accept only image files

                // Hide the file input
                fileInput.style.display = 'none';

                // Append the file input to the body (or anywhere else in your document)
                document.body.appendChild(fileInput);

                // Trigger the file input click
                fileInput.click();

                // Add an event listener to handle the file once selected
                fileInput.addEventListener('change', function (event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            // You can preview the image or perform other actions with it here
                            console.log(e.target.result); // Log the image data URL to the console
                        };
                        reader.readAsDataURL(file);
                    }

                    // Clean up by removing the input element after the selection
                    document.body.removeChild(fileInput);
                });
            });

            // Label for Input
            const inputs = [
                { id: 'username', labelText: 'Username', placeholder: '' },
                { id: 'email', labelText: 'Alamat Email', placeholder: '' },
                { id: 'phone', labelText: 'No. Telepon', placeholder: '' },
                { id: 'birthdate', labelText: 'Tanggal Lahir', placeholder: '' },
            ];

            inputs.forEach(input => {
                const inputField = document.getElementById(input.id);
                const label = document.querySelector(`label[for="${input.id}"]`);

                // Set initial placeholder
                inputField.placeholder = " ";

                inputField.addEventListener('focus', () => {
                    label.classList.add('active');
                    inputField.placeholder = ""; // Clear placeholder when focused
                });

                inputField.addEventListener('blur', () => {
                    if (inputField.value === '') {
                        label.classList.remove('active');
                        inputField.placeholder = input.placeholder; // Reset placeholder if empty
                    }
                });
            });

            // Copy User ID to Clipboard
            const userIDElement = document.getElementById('userID');
            const copyImage = document.getElementById('copyImage');

            copyImage.addEventListener('click', () => {
                const userID = userIDElement.textContent;

                // Copy the userID text to clipboard
                navigator.clipboard.writeText(userID).then(() => {
                    // Optional: Notify the user that the ID was copied
                    alert('User ID copied to clipboard!');
                }).catch(err => {
                    console.error('Could not copy text: ', err);
                });
            });

            document.getElementById("toggle-filter").addEventListener("click", function () {
                var filterSidebar = document.getElementById("filter-sidebar");
                if (filterSidebar.style.display === "none" || filterSidebar.style.display === "") {
                    filterSidebar.style.display = "block"; // Tampilkan filter
                    this.innerHTML = '<i class="fas fa-times"></i>'; // Ubah ikon dan teks tombol
                } else {
                    filterSidebar.style.display = "none"; // Sembunyikan filter
                    this.innerHTML = '<i class="fas fa-cog"></i>'; // Kembalikan ikon dan teks tombol
                }
            });

            // Event listener untuk mengatur ulang tampilan filter saat beralih dari mobile ke desktop
            window.addEventListener("resize", function () {
                var filterSidebar = document.getElementById("filter-sidebar");
                var toggleFilterButton = document.getElementById("toggle-filter");

                if (window.innerWidth >= 769) {
                    // Tampilkan sidebar di tampilan desktop
                    filterSidebar.style.display = "block";
                    toggleFilterButton.innerHTML = '<i class="fas fa-cog"></i>';
                } else {
                    // Sembunyikan sidebar di tampilan mobile jika sebelumnya disembunyikan
                    if (filterSidebar.style.display === "none" || filterSidebar.style.display === "") {
                        toggleFilterButton.innerHTML = '<i class="fas fa-cog"></i>';
                    }
                }
            });
        });

        document.getElementById('loginButton').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default link behavior
        
            // Close the login modal
            let loginModalElement = document.getElementById('loginModal');
            let loginModalInstance = bootstrap.Modal.getInstance(loginModalElement); // Get existing modal instance
            if (loginModalInstance) {
                loginModalInstance.hide();
            }
        
            // Show the otpModal with options to close when clicking outside
            let otpModalElement = document.getElementById('otpModal');
            let otpModalInstance = new bootstrap.Modal(otpModalElement, {
                backdrop: true, // Allow closing when clicking outside
                keyboard: true  // Allow closing with "Esc" key
            });
            otpModalInstance.show();
        });
        
        document.querySelectorAll('.otp-input').forEach((input, index, inputs) => {
            input.addEventListener('input', function (e) {
                const value = e.target.value;
                
                // Allow only one digit
                if (value.length > 1) {
                    e.target.value = value.charAt(0); // Keep only the first character
                }
    
                // Enable the next input and focus on it
                if (value && index < inputs.length - 1) {
                    inputs[index + 1].disabled = false;
                    inputs[index + 1].focus();
                }
            });
    
            input.addEventListener('keydown', function (e) {
                // Move to the previous input on Backspace
                if (e.key === 'Backspace' && e.target.value === '' && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });
        document.getElementById('registerLink').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
    
            // Close the login modal
            const loginModal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));
            if (loginModal) {
                loginModal.hide();
            }
    
            // Show the register modal
            const registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
            registerModal.show();
        }); 

        document.getElementById('loginLink').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
    
            // Close the register modal
            const registerModal = bootstrap.Modal.getInstance(document.getElementById('registerModal'));
            if (registerModal) {
                registerModal.hide();
            }
    
            // Show the login modal
            const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            loginModal.show();
        });

        document.getElementById('registerButton').addEventListener('click', function () {
            let isValid = true;
            const inputs = document.querySelectorAll('#registrationForm .form-control');
            const checkbox = document.getElementById('agreementCheckbox');
            const checkboxError = checkbox.nextElementSibling.nextElementSibling; // Error message
            
            inputs.forEach(input => {
                const errorMessage = input.nextElementSibling.nextElementSibling; // Find the small element
                if (!input.value.trim()) {
                    isValid = false;
                    errorMessage.classList.remove('d-none');
                    input.classList.add('border-danger');
                } else {
                    errorMessage.classList.add('d-none');
                    input.classList.remove('border-danger');
                }
            });
    
            // Check if the checkbox is checked
            if (!checkbox.checked) {
                isValid = false;
                console.log("Checkbox not checked"); // Debugging log
                checkboxError.classList.remove('d-none'); // Show error
            } else {
                checkboxError.classList.add('d-none'); // Hide error
            }
    
            if (isValid) {
                alert('Form is valid. Proceed to registration.');
            }
        });
    </script>
</body>

</html>