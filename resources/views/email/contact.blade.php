@component('mail::message')
##{{ $name }} has sent a message from the website

*From:* {{ $name }}

*Phone:* {{ $phone  }}

*Email:* {{ $email  }}


*Function type:* {{ $function_type  }}

*Proposed Date:* {{ $proposed_date  }}

*Estimated attendees:* {{ $attendees  }}

{{ $inquiry }}

@endcomponent