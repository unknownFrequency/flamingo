import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class SupportSlider extends Component {
    render() {
        return (
            <div>
                <h1>Cool, it's working</h1>
            </div>
        );
    }
}

export default SupportSlider;

// We only want to try to render our component on pages that have a div with an ID
// of "example"; otherwise, we will see an error in our console
if (document.getElementById('support-slider')) {
    ReactDOM.render(<SupportSlider />, document.getElementById('support-slider'));
}