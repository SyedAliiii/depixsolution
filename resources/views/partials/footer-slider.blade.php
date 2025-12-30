<ul class="socials">
    @if(\App\Models\Setting::get('social_twitter'))
    <li class="ms-btn"><a class="socicon-twitter" title="Twitter" target="_blank" href="{!! \App\Models\Setting::get('social_twitter') !!}"></a></li>
    @endif
    @if(\App\Models\Setting::get('social_dribbble'))
    <li class="ms-btn"><a class="socicon-dribbble" title="Dribbble" target="_blank" href="{!! \App\Models\Setting::get('social_dribbble') !!}"></a></li>
    @endif
    @if(\App\Models\Setting::get('social_facebook'))
    <li class="ms-btn"><a class="socicon-facebook" title="Facebook" target="_blank" href="{!! \App\Models\Setting::get('social_facebook') !!}"></a></li>
    @endif
    @if(\App\Models\Setting::get('social_instagram'))
    <li class="ms-btn"><a class="socicon-instagram" title="Instagram" target="_blank" href="{!! \App\Models\Setting::get('social_instagram') !!}"></a></li>
    @endif
</ul>
<div class="slider footer-copyright">
    <p>Copyright © {{ date('Y') }}. Depix Solution</p>
</div>
