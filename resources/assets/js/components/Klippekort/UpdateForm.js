import React, { Component } from 'react';
import PropTypes from 'prop-types';

class UpdateForm extends Component {
  constructor(props) {
    super(props);
    this.state = { 
      hoursmax: false,
      hoursspend: false
    };

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  componentWillMount() {
    this.setState({
      hoursmax: this.props.hoursmax,
      hoursspend: this.props.hoursspend,
    });
  }

  handleChange(e) {
    this.setState({ [e.target.name]: e.target.value });
  }

  handleSubmit(e) {
    e.preventDefault();

    fetch(`/klippekort/${this.props.user_id}`, {
      method: 'PUT',
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        hoursspend: this.state.hoursspend,
        hoursmax: this.state.hoursmax,
      }),
    })
  }

  render() {
    return (
      <div>
        <form onSubmit={this.handleSubmit}>
          <label>
              Antal support timer:
              <input type="text" 
                name="hoursmax"
                value={this.state.hoursmax} 
                onChange={this.handleChange} 
              />
              <input type="text" 
                name="hoursspend"
                value={this.state.hoursspend} 
                onChange={this.handleChange} 
              />
          </label>
          <input type="submit" value="Submit" />
        </form>
      </div>
    );
  }
}


UpdateForm.propTypes = {
  hoursmax: PropTypes.number.isRequired,
  hoursspend: PropTypes.number.isRequired,
  setState: PropTypes.func.isRequired,
};

export default UpdateForm;
