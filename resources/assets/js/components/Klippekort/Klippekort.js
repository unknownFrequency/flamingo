import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import ColorCard from './ColorCard';
import Rainbow from 'rainbowvis.js';
import UpdateForm from './UpdateForm'

class Klippekort extends Component {
  constructor(props) {
    super(props);
  }

  percentLeft(hoursspend, hoursmax) {
    const remainder = hoursmax - hoursspend;
    return (remainder / hoursmax) * 100;
  }

  getColors(percentLeft) {
    const numOfItems = 100;
    const numOfItemsGreyed = numOfItems - percentLeft;
    const rainbow = new Rainbow();
    rainbow.setNumberRange(1, numOfItems);
    rainbow.setSpectrum('green', 'tomato');
    const colors = [];

    for (let i = 1; i <= numOfItems; i++) {
      if (i < numOfItemsGreyed) {
        colors.push('#999');
      } else {
        const hexColour = rainbow.colourAt(i);
        colors.push(`#${hexColour}`);
      }
    }
    return colors;
  }

  render() {
    const { user_id, hoursspend, hoursmax } = this.props;
    const percentLeft = this.percentLeft(hoursspend, hoursmax);
    const colors = this.getColors(percentLeft);
    const colorCards = colors.map((color, i) => {
      const style = {
        width: '100px',
        height: '3px',
        marginLeft: '40%',
        backgroundColor: color,
      };
      return <ColorCard key={`colorcard-${i}`} style={style} />;
    });

    return (
      <div>
        <br />
        <h1>Service klippekort</h1>
        <UpdateForm 
          user_id={user_id}
          hoursspend={Number(hoursspend)}
          hoursmax={Number(hoursmax)} 
          setState={this.setState} 
        />
        {colorCards}
        <p className="text-center" style={{}}>Timer tilbage: {hoursmax - hoursspend}</p>
      </div>
    );
  }
}

export default Klippekort;
