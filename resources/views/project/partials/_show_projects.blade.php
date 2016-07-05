@if(isset($projects) && !empty($projects))
  @foreach($projects as $project)
	<tr>
	    <td>{!! $project->title !!}</td>
	    <td>{!! $project->description !!}</td>
	    <td style="width:15%" class="alignC">
            <a class=" mr10" title="Edit" href="{{ route('projects.edit',array('id'=>$project->id)) }}" >
            	<i class="fa fa-edit"></i>
            </a>
    </td>
	</tr>
  @endforeach
@endif