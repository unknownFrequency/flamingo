import React, { Component } from 'react';
import PropTypes from 'prop-types';

class UpdateForm extends Component {
  constructor(props) {
    super(props);
    this.state = { hoursMax: false };

    this.handleChange = this.handleChange.bind(this);
  }

  componentDidMount() {
    this.setState({
      hoursMax: this.props.hoursMax,
      hoursSpend: this.props.hoursSpend,
    });
  }

  handleChange(event) {
    this.setState({ hoursMax: event.target.value });
  }

  handleSubmit(event) {
    event.preventDefault();


    fetch( 'api/klippekorts/', {
      method:'post',
      /* headers are important*/
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },

      body: JSON.stringify(product)
    })
      .then(response => {
        return response.json();
      })
      .then( data => {
        //update the state of products and currentProduct
        this.setState((prevState)=> ({
          products: prevState.products.concat(data),
          currentProduct : data
        }))
      })
  }

  render() {
    return (
      <div>
        <form onSubmit={this.handleSubmit}>
          <label>
              Antal support timer:
            <input type="text" value={this.state.hoursMax} onChange={this.handleChange} />
          </label>
          <input type="submit" value="Submit" />
        </form>
      </div>
    );
  }
}


UpdateForm.propTypes = {
  hoursMax: PropTypes.number.isRequired,
  hoursSpend: PropTypes.number.isRequired,
  setState: PropTypes.func.isRequired,
};

export default UpdateForm;
