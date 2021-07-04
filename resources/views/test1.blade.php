<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<table style="width: 100% !important;">
                                <thead>
                                <tr>
                                    <th>cat</th>
                                    <th>url</th>
                                    @for ($i=1 ; $i<= $max_month; $i++)
                                        <th>val1 {{ substr(date("F", mktime(0, 0, 0, $i, 10)),0,3)}}</th>
                                        <th>val2 {{ substr(date("F", mktime(0, 0, 0, $i, 10)),0,3)}}</th>
                                    @endfor

                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($distinct_tbl_url as $key=>$val)

                                        <tr>
                                            <td>{{$val->category}}</td>
                                            <td>{{$val->url}}</td>

                                            @php $temp_month_arr = []; $temp_values = []; @endphp
                                            @foreach ($tbl_url as $cat)
                                                @if($val->url == $cat->url)
                                                    @php array_push($temp_month_arr, $cat->month)  @endphp
                                                    @php $temp_values[$cat->month]=[$cat->value1, $cat->value2] @endphp
                                                @endif
                                            @endforeach

                                            @foreach(array_diff(range(1,$max_month), $temp_month_arr) as $v)
                                            @php $temp_values[$v]=[0,0] @endphp
                                            @endforeach

                                            @php ksort($temp_values); @endphp
                                            @foreach ( $temp_values as $val )
                                                    <td>{{$val[0]}}</td>
                                                    <td>{{$val[1]}}</td>
                                            @endforeach

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        