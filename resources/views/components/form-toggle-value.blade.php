 @if (getKeyForm($key,$dataForm[0]) == 'True')
     <img src="{{ asset('admin/forms/Domestic_Electrical_installation_Condition_report/Check_mark.svg') }}"
         width="25px">
 @elseif (getKeyForm($key,$dataForm[0]) == 'False')
     <img src="{{ asset('admin/forms/Domestic_Electrical_installation_Condition_report/cross.png') }}" width="25px">
 @else
     {{ $dataForm[0][$key] ?? 'N/A' }}
 @endif
