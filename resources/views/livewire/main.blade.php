<div>
    {{-- Do your work, then step back. --}}
    <!-- CONTACT -->
    <div id="contact" class="contact_area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span>Scan Site</span>
                <h2>Scan a site for Form Vulnerabilities</h2>
            </div>
            <div class="contact">
                <div class="row">
                    <div class="offset-lg-1 col-lg-10 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.2s" data-wow-offset="0">

                        <!-- CONTACT -->
                        <div>
                            <div class="contact">
                                <form class="form" name="enq" method="post" wire:submit.prevent="scan">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Link</label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                required="required" wire:model="name">
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <button type="submit" value="Send message" name="submit" id="submitButton"
                                                class="btn_one" title="Submit Your Message!">Scan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="scan-results mt-4">
                                @if ($error)
                                    <div class="alert alert-danger">
                                        {{ $error }}
                                    </div>
                                @endif

                                @if ($results)
                                    <h3>Scan Results:</h3>
                                    @foreach ($results as $result)
                                        @if (isset($result['message']))
                                            <p>{{ $result['message'] }}</p>
                                        @else
                                            <p>
                                                <strong>Field Name:</strong> {{ $result['name'] }} <br>
                                                <strong>Type:</strong> {{ $result['type'] }} <br>
                                                <strong>Style:</strong> {{ $result['style'] }}
                                            </p>
                                            <hr style="width:60%; height:40px;">
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div><!-- END COL  -->
            </div><!-- END ROW -->
        </div><!--- END CONTAINER -->
    </div>
    <!-- END CONTACT -->
</div>
