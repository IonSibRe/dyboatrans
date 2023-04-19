<h1>NEZÁVAZNÁ POPTÁVKA - {{$contact->fullname}}</h1>

<br>

<p>Z webových stránek vám byla doručena zpráva ohledně nové poptávky.</p>

<br>

<p>Informace o zákazníkovi:</p>

<br>

<p>
    <strong>Celé jméno: </strong>{{ $contact->fullname }} <br>
</p>
<p>
    <strong>Telefon: </strong>{{ $contact->phone }} <br>
</p>
<p>
    <strong>Datum odjezdu: </strong>{{ $contact->departure }} <br>
</p>
<p>
    <strong>Cílové místo: </strong>{{ $contact->destination }} <br>
</p>
<p>
    <strong>Typ vozidla: </strong>{{ $contact->vehicle_type }} <br>
</p>
<p>
    <strong>Společnost: </strong>{{ $contact->company }} <br>
</p>
<p>
    <strong>E-mail: </strong>{{ $contact->email }} <br>
</p>
<p>
    <strong>Datum návratu: </strong>{{ $contact->arrival }} <br>
</p>
<p>
    <strong>Počet osob: </strong>{{ $contact->people_count }} <br>
</p>
  