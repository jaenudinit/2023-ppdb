<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->
	<div class="container-xxl flex-grow-1 container-p-y">
		<div class="row">
			<div class="col-lg-12 mb-4 order-0">
				<div class="card">
					<div class="card-body">
						<button class="btn btn-primary rounded-pill" onclick="addKriteria()"><i class="bx bx-plus"></i> Kriteria</button>
						<div class="table-responsive text-nowrap">
							<table id="tableKriteria" class="table table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Kriteria</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ Expense Overview -->
	</div>
</div>
	<!-- / Content -->

	<!-- Modal -->
<div class="modal fade" id="modal_form" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="#" id="formKriteria" class="form-horizontal" enctype="multipart/form-data">
				<div class="modal-body form">
					<input type="hidden" value="" name="id"/> 
					<div class="form-body">
						<div class="mb-3">
							<label for="kriteria" class="form-label">Kriteria</label>
							<input type="text" class="form-control" id="kriteria" name="kriteria" placeholder="Kriteria"/>
							<small id="msg-kriteria" class="msg text-danger"></small>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" id="btnSave" onclick="saveKriteria()" class="btn btn-primary rounded-pill">Save</button>
					<button type="button" class="btn btn-danger rounded-pill" data-bs-dismiss="modal">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>


