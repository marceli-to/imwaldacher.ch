@props(['url'])
<tr>
<td class="header">
<table class="header-inner" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td style="padding-left: 32px; padding-right: 32px; text-align: left;">
<a href="{{ $url }}" style="display: inline-block;">
<img src="{{ asset('images/logo.png') }}" width="190" alt="{{ config('app.name') }}" style="width: 190px; max-width: 190px; height: auto; border: none;">
</a>
</td>
</tr>
</table>
</td>
</tr>
