<div class="container">
	<div class="row">
		<div class="description col-md-12">
			<p>Beautify your JSON. Validate and format it. Indent as you wish. Remove double quotes around numbers. Remove double quotes on keys.</p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-5 more-bottom-margin">
			<div class="form-group">
				<label>Upload a file</label>
				<span class="btn btn-default fileinput-button form-control">
					<label>
						<i class="glyphicon glyphicon-plus"></i>
						<span>Select a file...</span>
					</label>
					<input id="fileupload" type="file" name="file" />
				</span>
			</div>
			<div class="form-group code-group">
				<label>Or paste your JSON here</label>
				<textarea id="json" class="form-control" rows="15"><?='{"pi":"3.14159265359", "one":"1", "one+5":"6", "Array":[1,2,3], "if":"else"}'?></textarea>
				<a class="clear" href="#" title="Clear"><i class="glyphicon glyphicon-remove"></i></a>
			</div>
			<button id="convert" type="submit" class="btn btn-primary action">
				<i class="glyphicon glyphicon-chevron-right"></i> Beautify
			</button>
		</div>
		<div class="col-md-7 more-bottom-margin">
			<div class="form-group">
				<label>Options</label>
				<div class="form-control">
					<label class="inline">No quotes</label>
					<label class="inline"><input type="checkbox" id="drop-quotes-on-keys" /> on keys</label>
					<label class="inline"><input type="checkbox" id="drop-quotes-on-numbers" /> on numbers</label>
					&nbsp;
					<label class="inline">
						Indent
						<select id="space">
							<option value="tab">tab</option>
							<option value="1">1 space</option>
							<option value="2" selected="selected">2 spaces</option>
							<option value="3">3 spaces</option>
							<option value="4">4 spaces</option>
							<option value=".">.</option>
							<option value="..">..</option>
						</select>
					</label>
				</div>
			</div>
			<div class="form-group code-group">
				<label>Result</label>
				<textarea id="result" class="form-control" rows="15"></textarea>
				<a class="clear" href="#" title="Clear"><i class="glyphicon glyphicon-remove"></i></a>
			</div>
			<p class="help-block">Ctrl + A then Ctrl + C to copy to clipboard.</p>
		</div>
	</div>
</div>