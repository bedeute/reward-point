<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
      </div>
      <ul class="breadcrumb">
        <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
		<li><a href="{{ URL::to('community?md='.$masterdetail["filtermd"]) }}">{{ $pageTitle }}</a></li>
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper">   
	   <div class="toolbar-line">
	   		<a href="{{ URL::to('community?md='.$masterdetail["filtermd"].$trackUri) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="icon-table"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
			@if($access['is_add'] ==1)
	   		<a href="{{ URL::to('community/add/'.$id.'?md='.$masterdetail["filtermd"].$trackUri) }}" class="tips btn btn-xs btn-primary" title="{{ Lang::get('core.btn_edit') }}"><i class="icon-pencil3"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
			@endif  		   	  
		</div>
	<div class="table-responsive">
	<table class="table table-striped table-bordered" >
		<tbody>	
	
					<tr>
						<td width='30%' class='label-view text-right'>Id</td>
						<td>{{ $row->id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Name</td>
						<td>{{ $row->name }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Name Uri</td>
						<td>{{ $row->name_uri }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Community Category Id</td>
						<td>{{ $row->community_category_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>City Id</td>
						<td>{{ $row->city_id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Description</td>
						<td>{{ $row->description }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Benefit Of Joining</td>
						<td>{{ $row->benefit_of_joining }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Looking For</td>
						<td>{{ $row->looking_for }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Keyword</td>
						<td>{{ $row->keyword }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Call For Members</td>
						<td>{{ $row->call_for_members }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Profile Question</td>
						<td>{{ $row->profile_question }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Contact Person</td>
						<td>{{ $row->contact_person }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Email</td>
						<td>{{ $row->email }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Phone</td>
						<td>{{ $row->phone }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Website</td>
						<td>{{ $row->website }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Address</td>
						<td>{{ $row->address }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Facebook</td>
						<td>{{ $row->facebook }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Twitter</td>
						<td>{{ $row->twitter }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Is Free</td>
						<td>{{ $row->is_free }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Price</td>
						<td>{{ $row->price }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Currency</td>
						<td>{{ $row->currency }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Is Open Community</td>
						<td>{{ $row->is_open_community }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Is Need Sponsorship</td>
						<td>{{ $row->is_need_sponsorship }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sponsorship Introduction</td>
						<td>{{ $row->sponsorship_introduction }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Logo For Open Donation</td>
						<td>{{ $row->logo_for_open_donation }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Status</td>
						<td>{{ $row->status }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Time Created</td>
						<td>{{ $row->time_created }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Time Updated</td>
						<td>{{ $row->time_updated }} </td>
						
					</tr>
				
		</tbody>	
	</table>    
	</div>
	</div>
</div>
	  