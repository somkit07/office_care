@if(!empty($quotation))
<table width="600">
    <tr>
        <th width="200" align="left">Company Name</th>
        <td>{{ $quotation->quotation_company }}</td>
    </tr>
    <tr>
        <th align="left">Contact</th>
        <td>{{ $quotation->quotation_contact }}</td>
    </tr>
    <tr>
        <th align="left">Tel</th>
        <td>{{ $quotation->quotation_tel }}</td>
    </tr>
    <tr>
        <th align="left">Email</th>
        <td>{{ $quotation->quotation_email }}</td>
    </tr>
    <tr>
        <th align="left">Message</th>
        <td>{{ $quotation->quotation_message }}</td>
    </tr>
</table>
@endif