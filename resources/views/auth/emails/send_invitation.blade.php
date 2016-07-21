<h1>Hi {!! $records['loggin_username'] !!} added you to a Basecamp: <br> Project Description </h1>
 
<p>Basecamp’s a place that helps everyone stay organized and on the same page. It’s really straightforward and easy! To join {!! $records['loggin_username'] !!}, click this button:</p>

<a class="email-action-button__link" href="{{ url('/register').'?id='.$records['id'].'&token='.$records['token'] }}" style="text-align: center;background-color: #3cb371;white-space: nowrap ; text-overflow: ellipsis ; overflow: hidden ; display: inline-block ; width: 30% ; font-size: 16px ; font-family: &quot;helvetica&quot; , &quot;arial&quot; , sans-serif ; text-decoration: none ; line-height: 40px ; color: #fff" target="_other" rel="nofollow"><span class="email-action-button__text" style="color: #fff">
              Join {!! $records['loggin_username'] !!} in Basecamp
</span></a>