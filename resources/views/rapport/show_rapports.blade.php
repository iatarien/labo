

@foreach($rapports as $rapport)
@if($rapport->type_activity =="عمل تطبيقي")
<tr>
    <td rowspan="{{$rapport->n}}">{{$rapport->date}}
        <br><strong>{{$rapport->time}}</strong></td>
    <td rowspan="{{$rapport->n}}">{{$rapport->name_labo}}</td>
    @if($rapport->engineer =="all")
    <td rowspan="{{$rapport->n}}">جميع المهندسين</td>
    @else
    <td rowspan="{{$rapport->n}}">{{$rapport->full_name}}</td>
    @endif
    <td rowspan="{{$rapport->n}}">{{$rapport->ze_activity}}</td>
    <td rowspan="{{$rapport->n}}">{{$rapport->type_activity}}</td>
    <td rowspan="{{$rapport->n}}">{{$rapport->name_niveau}}</td>
    <td rowspan="{{$rapport->n}}">{{$rapport->name_module}}</td>
    <td rowspan="{{$rapport->n}}">{{$rapport->sujet_trav}}</td>
    @if(isset($rapport->outils[0]))
    <?php $outil = $rapport->outils[0]; ?>
    <td>{{$outil->name_tool}}<br><span style="color: blue">{{$outil->inventaire}}</span></td>
    <td>{{$outil->charge}}</td>
    <td>{{$outil->state_av}}</td>
    @if($outil->avis =="بتحفظ")
    <td>{{$outil->avis}} <br> <a href="reserve/{{$outil->reserve_before}}" target="_blank"> 
        <i style="font-size : 20px;" class="fas fa-fw fa-file-word"></i></a></td>
    @else
    <td>{{$outil->avis}}</td>
    @endif
    @if($outil->state_after =="بتحفظ")
    <td>{{$outil->state_after}} <br> <a href="reserve/{{$outil->reserve_after}}" target="_blank"> 
        <i style="font-size : 20px;" class="fas fa-fw fa-file-word"></i></a></td>
    @else
    <td>{{$outil->state_after}}</td>
    @endif
    
    @else
    <td>/</td>
    <td>/</td>
    <td>/</td>
    <td>/</td>
    <td>/</td>
    @endif
    <td rowspan="{{$rapport->n}}" style="vertical-align : middle">
    @if($rapport->m == 0)
    لا شيئ
    @endif
    <?php $max = count($rapport->chemicals); $i =0; ?>
    @foreach($rapport->chemicals as $chemical)
        <span>{{$chemical->name_chemical}} ({{$chemical->qty}} {{$chemical->unity}})</span>
        @if($chemical->quantity_now == 0)
        <span style="color : red">(استهلكت)</span>
        @endif
        
        <?php $i++; ?>
        @if( $i < $max )
            <hr style="background-color : black;">
        @endif
    @endforeach
    </td>
</tr>
    <?php $outils = json_decode(json_encode($rapport->outils), true); ;
    array_shift($outils); ?>
    @foreach($outils as $outil)
    <?php $outil = (object) $outil; ?>
    <tr>
        <td>{{$outil->name_tool}}<br><span style="color: blue">{{$outil->inventaire}}</span></td>
        <td>{{$outil->charge}}</td>
        <td>{{$outil->state_av}}</td>
        @if($outil->avis =="بتحفظ")
        <td>{{$outil->avis}} <br> <a href="reserve/{{$outil->reserve_before}}" target="_blank"> 
            <i style="font-size : 20px;" class="fas fa-fw fa-file-word"></i></a></td>
        @else
        <td>{{$outil->avis}}</td>
        @endif
        @if($outil->state_after =="بتحفظ")
        <td>{{$outil->state_after}} <br> <a href="reserve/{{$outil->reserve_after}}" target="_blank"> 
            <i style="font-size : 20px;" class="fas fa-fw fa-file-word"></i></a></td>
        @else
        <td>{{$outil->state_after}}</td>
        @endif
    </tr>
    @endforeach
    
@elseif($rapport->type_activity =="أعمال نهاية الدراسة")
<tr>
    <td rowspan="{{$rapport->n}}">{{$rapport->date}}
        <br><strong>{{$rapport->time}}</strong></td>
    <td rowspan="{{$rapport->n}}">/</td>
    @if($rapport->engineer =="all")
    <td rowspan="{{$rapport->n}}">جميع المهندسين</td>
    @else
    <td rowspan="{{$rapport->n}}">{{$rapport->full_name}}</td>
    @endif
    <td rowspan="{{$rapport->n}}">{{$rapport->ze_activity}}</td>
    <td rowspan="{{$rapport->n}}">{{$rapport->type_activity}}</td>
    <td rowspan="{{$rapport->n}}">/</td>
    <td rowspan="{{$rapport->n}}">/</td>
    <td rowspan="{{$rapport->n}}">{{$rapport->sujet_trav}}</td>
    @if(isset($rapport->outils[0]))
    <?php $outil = $rapport->outils[0]; ?>
    <td>{{$outil->name_tool}}<br><span style="color: blue">{{$outil->inventaire}}</span></td>
    <td>{{$outil->charge}}</td>
    <td>{{$outil->state_av}}</td>
    @if($outil->avis =="بتحفظ")
    <td>{{$outil->avis}} <br> <a href="reserve/{{$outil->reserve_before}}" target="_blank"> 
        <i style="font-size : 20px;" class="fas fa-fw fa-file-word"></i></a></td>
    @else
    <td>{{$outil->avis}}</td>
    @endif
    @if($outil->state_after =="بتحفظ")
    <td>{{$outil->state_after}} <br> <a href="reserve/{{$outil->reserve_after}}" target="_blank"> 
        <i style="font-size : 20px;" class="fas fa-fw fa-file-word"></i></a></td>
    @else
    <td>{{$outil->state_after}}</td>
    @endif
    
    @else
    <td>/</td>
    <td>/</td>
    <td>/</td>
    <td>/</td>
    <td>/</td>
    @endif
    <td rowspan="{{$rapport->n}}" style="vertical-align : middle">
    @if($rapport->m == 0)
    لا شيئ
    @endif
    <?php $max = count($rapport->chemicals); $i =0; ?>
    @foreach($rapport->chemicals as $chemical)
        <span>{{$chemical->name_chemical}} ({{$chemical->qty}} {{$chemical->unity}})</span>
        @if($chemical->quantity_now == 0)
        <span style="color : red">(استهلكت)</span>
        @endif
        
        <?php $i++; ?>
        @if( $i < $max )
            <hr style="background-color : black;">
        @endif
    @endforeach
    </td>
</tr>
    <?php $outils = json_decode(json_encode($rapport->outils), true); ;
    array_shift($outils); ?>
    @foreach($outils as $outil)
    <?php $outil = (object) $outil; ?>
    <tr>
        <td>{{$outil->name_tool}}<br><span style="color: blue">{{$outil->inventaire}}</span></td>
        <td>{{$outil->charge}}</td>
        <td>{{$outil->state_av}}</td>
        @if($outil->avis =="بتحفظ")
        <td>{{$outil->avis}} <br> <a href="reserve/{{$outil->reserve_before}}" target="_blank"> 
            <i style="font-size : 20px;" class="fas fa-fw fa-file-word"></i></a></td>
        @else
        <td>{{$outil->avis}}</td>
        @endif
        @if($outil->state_after =="بتحفظ")
        <td>{{$outil->state_after}} <br> <a href="reserve/{{$outil->reserve_after}}" target="_blank"> 
            <i style="font-size : 20px;" class="fas fa-fw fa-file-word"></i></a></td>
        @else
        <td>{{$outil->state_after}}</td>
        @endif
    </tr>
    @endforeach
    
@elseif($rapport->type_activity =="زيارات")

@endif
@endforeach