<table width="600">
    <tr>
        <th style="width: 200px;" align="left">Name</th>
        <td>{{ $contact_us_form_name }}</td>
    </tr>
    <tr>
        <th align="left">Surname</th>
        <td>{{ $contact_us_form_surname }}</td>
    </tr>
    <tr>
        <th align="left">Email</th>
        <td>{{ $contact_us_form_email }}</td>
    </tr>
    <tr>
        <th align="left">Subject</th>
        <td>{{ $contact_us_form_subject }}</td>
    </tr>
    <tr>
        <th align="left">Message</th>
        <td>{{ $contact_us_form_message }}</td>
    </tr>
    <tr>
        <th align="left">Datetime Create</th>
        <td>{{ date('Y-m-d H:i:s') }}</td>
    </tr>
</table>