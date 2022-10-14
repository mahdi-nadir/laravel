<ul>
    <li><a href="welcome">{{__('text.home')}}</a></li>
    <li><a href="team">{{__('text.team')}}</a></li>
    <li><a href="contact">{{__('text.contact')}}</a></li>
    <li><a href="about">{{__('text.about')}}</a></li>
</ul>

<h1>{{__('text.about')}}</h1>

@isset($fr)
<a href="fr">{{__('text.french')}}</a>   
@endisset

@isset($en)
<a href="en">{{__('text.english')}}</a>
@endisset