<div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel3">{{$projet->titre_projet}}</h5>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">
                            <h6  id="exampleModalLabel3">OBJECTIF GLOBAL</h6>
                              <div class="row">
                              <p>{{$projet->objectif_global}}</p>
                              </div>
                              
                            </div>

                            <div class="modal-body">
                            <h6  id="exampleModalLabel3">OBJECTIFS SPECIFIQUES</h6>
                              <div class="row">
                              <p>{{$projet->objectif_specifiques}}</p>
                              </div>
                              
                            </div>

                            <div class="modal-body">
                            <h6  id="exampleModalLabel3">FINANCEMENT</h6>
                              <div class="row">
                              <p>{{$projet->financement}}</p>
                              </div>
                              
                            </div>

                            <div class="modal-body">
                            <h6  id="exampleModalLabel3">BUDJET</h6>
                              <div class="row">
                              <p>{{$projet->budjet}}</p>
                              </div>
                              
                            </div>

                            <div class="modal-body">
                            <h6  id="exampleModalLabel3">ZONE</h6>
                              <div class="row">
                              <p>{{$projet->zone}}</p>
                              </div>
                              
                            </div>

                            <div class="modal-body">
                            <h6  id="exampleModalLabel3">DURÉE</h6>
                              <div class="row">
                              <p>{{$projet->find_duration()}}</p>
                              </div>
                              
                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>