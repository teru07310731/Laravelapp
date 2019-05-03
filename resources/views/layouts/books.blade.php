@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading"></div>
					Book list
				</div>

				<div class="panel-body">
					@include('common.errors')

					<from action="/book" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Book</label>

							<div class="col-sm-6">
								<input type="text" name="name" id="book-name" class="form-control" value="{{old('book') }}">
							</div>
						</div>


						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-plus"></i>
									本を追加する
								</button>
							</div>
						</div>
					</form>
				</div>

				@if (count($books) > 0)
					<div class="panel panel-default">
						<div class="panel-heading"></div>
							Book list
						</div>

						<div class="panel-body">
							<table class="table table-striped"></table>
								<thead>
									<th>Book</th>
									<th>$nbsp;</th>
								</thead>
								<tbody>
									@foreach ($books as $book)
										<tr>
											<td class="table-text"</div>{{ $book->title }}</div></td>

											<td>
												<form action="/book/{{$book->id }}" method="POST">
												{{	csrf_field() }}
												{{	method_field('DELETE')	}}

												<button type="submit" class="btn btn-danger">
													<i class="fa fa-trash"></i>削除
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				@endif
			</div>
		</div>
	@endsction