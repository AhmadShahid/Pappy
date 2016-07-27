@if(isset($schedules) && !empty($schedules))
  @foreach($schedules as $schedule)
	<tr>
	    <td>{!! $schedule->title !!}</td>
	    <td>{!! $schedule->description !!}</td>
      <td>{!! $schedule->user->name !!}</td>
	    <td style="width:15%" class="alignC">
            <a class=" mr10" title="Edit" href="{{ route('schedules.edit',array('id'=>$schedule->id)) }}" >
            	<i class="fa fa-edit"></i>
            </a>
    </td>
	</tr>
  @endforeach
@endif