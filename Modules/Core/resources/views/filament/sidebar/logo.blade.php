<div style="display: flex; align-items: center; text-align: center;">
    <img src="{{ $logo }}" alt="Logo" class="h-7 w-7">
    <h3 style="margin-left: 10px; margin-bottom: 0;">{{ $name }}</h3>
</div>
<script>
    console.log("Logo and name rendered in sidebar");
    // if route is login, h3 font-weight: bold; font-size: 20px;
    if (window.location.pathname === '/admin/login') {
        document.querySelector('h3').style.fontWeight = 'bold';
        document.querySelector('h3').style.fontSize = '20px';
    }
</script>