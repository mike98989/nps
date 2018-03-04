<hr>
            <div class="col-md-9" style="text-align:justify;line-height:27px;float:none;margin:auto">
            <h3 style="text-align:center"><?php echo $statistics['heading'];?></h3>
              <p>&nbsp;                </p>
              <table class="table table-striped col-lg-5">
                <tr>
                  <td width="355" valign="top"><p><strong>Total Inmate population: </strong></p></td>
                  <td width="147" colspan="2" valign="top"><p align="left"><?php $total_inmate =  $statistics['awaiting_trial_female'] + $statistics['awaiting_trial_male'] + $statistics['convicted_male'] + $statistics['convicted_female']; echo number_format($total_inmate);?></p></td>
                </tr>
                <tr>
                  <td width="355" valign="top"><p><strong>Total Male Population:                            </strong></p></td>
                  <td width="147" colspan="2" valign="top"><p align="left"> <?php $total_male =  $statistics['awaiting_trial_male'] + $statistics['convicted_male'];echo number_format($total_male);?></p></td>
                </tr>
                <tr>
                  <td width="355" valign="top"><p><strong>Total female population:                          </strong></p></td>
                  <td width="147" colspan="2" valign="top"><p align="left"><?php $total_female = $statistics['awaiting_trial_female'] + $statistics['convicted_female'];echo number_format($total_female);?></p></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td colspan="2" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td width="355" valign="top"><p><strong>Total Convicted Prisoners:                                 </strong></p></td>
                  <td width="147" colspan="2" valign="top"><p align="left"><?php $total_convicted = $statistics['convicted_male'] + $statistics['convicted_female']; echo number_format($total_convicted);?></p></td>
                </tr>
                <tr>
                  <td width="355" valign="top"><p><strong>Convicted Male Prisoners:    </strong></p></td>
                  <td width="147" colspan="2" valign="top"><p align="left"> <?php echo number_format($statistics['convicted_male']);?>  </p></td>
                </tr>
                <tr>
                  <td width="355" valign="top"><p><strong>Convicted Female Prisoners:                  </strong></p></td>
                  <td width="147" colspan="2" valign="top"><p align="left"><?php echo number_format($statistics['convicted_female']);?></p></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td colspan="2" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td width="355" valign="top"><p><strong>Total Awaiting Trial Prisoners:  </strong></p></td>
                  <td width="147" colspan="2" valign="top"><p align="left"><?php $total_awaiting = $statistics['awaiting_trial_male'] + $statistics['awaiting_trial_female']; echo number_format($total_awaiting);?></p></td>
                </tr>
                <tr>
                  <td width="355" valign="top"><p><strong>Awaiting Trial Males:      </strong></p></td>
                  <td width="147" colspan="2" valign="top"><p align="left"><?php echo number_format($statistics['awaiting_trial_male']);?></p></td>
                </tr>
                <tr>
                  <td width="355" valign="top"><p><strong>Awaiting Trial Females:  </strong></p></td>
                  <td width="147" colspan="2" valign="top"><p align="left"><?php echo number_format($statistics['awaiting_trial_female']);?></p></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td colspan="2" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td width="355" valign="top"><p><strong>Convicted Prisoners:                <br>
                  </strong></p></td>
                  <td width="147" colspan="2" valign="top"><p align="left">
                    <?php echo number_format($total_convicted).'('.round(($total_convicted/$total_inmate)*100).'%)' ;?>
                 </p></td>
                </tr>
                <tr>
                  <td width="355" valign="top"><p><strong>Awaiting Trial Prisoners:  </strong></p></td>
                  <td width="147" colspan="2" valign="top"><p align="left"><?php echo number_format($total_awaiting).'('.round(($total_awaiting/$total_inmate)*100).'%)' ;?></p></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td colspan="2" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td width="355" valign="top"><p><strong>Male Prisoners:    </strong></p></td>
                  <td width="147" colspan="2" valign="top"><p align="left">  
                    <?php echo number_format($total_male).'('.round(($total_male/$total_inmate)*100).'%)' ;?></p></td>
                </tr>
                <tr>
                  <td valign="top"><strong>Female Prisoners:  </strong></td>
                  <td colspan="2" valign="top"><div align="left">
                    <?php echo number_format($total_female).'('.round(($total_female/$total_inmate)*100).'%)' ;?></div></td>
                </tr>
              </table>

            </div>
