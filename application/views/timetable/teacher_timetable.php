<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php $this->view('classes/sidebar_nav'); ?>
        </div>
        <div class="col-md-9">

            <div class="panel panel-info">
                <div class="panel-heading">Timetable Information</div>
                <div class="panel-body">
									<table class="table-bordered" style="width: 100%">
											<thead>
													<tr>
															<th style="text-align: center; width: 20%;">MONDAY</th>
															<th style="text-align: center; width: 20%;">TUESDAY</th>
															<th style="text-align: center; width: 20%;">WEDNESDAY</th>
															<th style="text-align: center; width: 20%;">THURSDAY</h>
															<th style="text-align: center; width: 20%;">FRIDAY</th>
													</tr>
											</thead>
											<tbody>
													<tr style="height: 45px;">
															<td align="center">
																	<?php foreach ($slots as $slot) {
																	  if ($slot->slot_id === "MO1") {
																	    var_dump($slot->subject_id);
																	  }
																  } ?>
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
                                <?php foreach ($slots as $slot) {
                                  if ($slot->slot_id === "FR1") {
                                    var_dump($slot->subject_id);
                                  }
                                } ?>
															</td>
													</tr>
													<tr style="height: 45px;">
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
													</tr>
													<tr style="height: 45px;">
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
													</tr>
													<tr style="height: 45px;">
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
													</tr>
													<tr>
															<td style="font-weight: bold; text-align: center;" colspan="5">INTERVAL</td>
													</tr>
													<tr style="height: 45px;">
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
													</tr>
													<tr style="height: 45px;">
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
													</tr>
													<tr style="height: 45px;">
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
													</tr>
													<tr style="height: 45px;">
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
															<td align="center">
																	Test
															</td>
													</tr>
											</tbody>
									</table>
                </div>
            </div>
        </div>
    </div>
</div>
