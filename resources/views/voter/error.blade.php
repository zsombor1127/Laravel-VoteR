@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert-box" id="alert-box">
            <label class="alert-message">{{ $error }}</label>
            <div class="alert-close" onclick="closeAlertBox()">&#x2715</div>	
        </div>
    @endforeach
@endif