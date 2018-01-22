import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Klippekort from './Klippekort';

/* Main Component */
class Main extends Component {

  constructor() {
    super();

    this.state = {
      hoursMax: 0,
      hoursSpend: 0
    }
  }

  componentDidMount() {
    //code omitted for brevity
  }

  renderProducts() {
    // return this.state.products.map(product => {
    //   return (
    //     //this.handleClick() method is invoked onClick.
    //     <li onClick={
    //       () => this.handleClick(product)} key={product.id} >
    //       { product.title }
    //     </li>
    //   );
    // })
  }

  handleClick(product) {
    //handleClick is used to set the state
    this.setState({currentProduct:product});

  }

  render() {
    /* Some css code has been removed for brevity */
    return (
      <div>
        <Klippekort hoursMax={this.state.hoursMax} hoursSpend={this.state.hoursSpend} />
      </div>


    );
  }
}
if (document.getElementById('main')) {
  ReactDOM.render(<Main />, document.getElementById('main'));
}
